<?php

namespace App\Repositories;

use App\Models\Post;
use App\Models\PostFile;
use App\Models\PostTranslation;
use App\Models\Section;
use App\Models\Slug;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Traits\FileUploadTrait;
use App\Repositories\Interfaces\PostRepositoryInterface;

class PostRepository implements PostRepositoryInterface
{
    use FileUploadTrait;
    public function getAllPosts($sec)
    {
        $section = Section::where('id', $sec)->with('translations')->first();

        if (getStyleAttribute($section->type_id) == 1) {
            $post = Post::where('section_id', $sec)->with(['translations', 'slugs'])->first();
            if (isset($post) && $post !== null) {
                return redirect()->route('post.edit', [app()->getLocale(), $post->id]);
            }

            return redirect()->route('post.create', [app()->getLocale(), $sec]);
        }
    }

    public function getPostById($id)
    {
        $post = Post::where('id', $id)->with(['translations', 'files'])->first();
        $section = Section::where('id', $post->section_id)->with('translations')->first();

        return ['section' => $section, 'post' => $post];
    }
    public function createPost($sec)
    {
        $section = Section::where('id', $sec)->with('translations')->first();

        return $section;
    }
    public function storePost($sec , Request $request)
    {
        $section = Section::where('id', $sec)->with('translations')->first();
        $values = $request->all();
        $values['section_id'] = $sec;
        $values['author_id'] = auth()->user()->id;
        $postFillable = (new Post)->getFillable();
        $postTransFillable = (new PostTranslation)->getFillable();

        if ($request->hasFile('image')) {
            $values['image'] = $this->uploadImage($values);
        }
        if ($request->has('is_component')) {
            $values['additional'] = getAdditional($values, array_diff(array_keys($section->componentfields['nonTrans']), $postFillable));
        } else {
            $values['additional'] = getAdditional($values, array_diff(array_keys($section->fields['nonTrans']), $postFillable));
        }

        foreach (config('app.locales') as $locale) {
            if ($request->has('is_component')) {
                $values[$locale]['slug'] = str_replace(' ', '-', $values[$locale]['title']);

                $values[$locale]['locale_additional'] = getAdditional($values[$locale], array_diff(array_keys($section->componentfields['trans']), $postTransFillable));
            } else {
                $values[$locale]['slug'] = str_replace(' ', '-', $values[$locale]['slug']);
                $values[$locale]['locale_additional'] = getAdditional($values[$locale], array_diff(array_keys($section->fields['trans']), $postTransFillable));
            }
        }
        $post = Post::create($values);
        foreach (config('app.locales') as $locale) {
            $post->slugs()->create([
                'fullSlug' => $locale.'/'.$post->translate($locale)->slug,
                'slug' => $values[$locale]['slug'],
                'locale' => $locale,
            ]);
        }
        if ($request->has('files')) {
            $values['file'] = $this->uploadFiles($values, $post);
        }
        return $section;
    }
    public function updatePost($id, Request $request)
    {

        $post = Post::where('id', $id)->with('translations')->first();
        $section = Section::where('id', $post->section_id)->with('translations')->first();
        $values = $request->all();
        $postFillable = (new Post)->getFillable();
        $postTransFillable = (new PostTranslation)->getFillable();
        if ($request->hasFile('image')) {
            $values['image'] = $this->uploadImage($request->file('image'), config('config.file_path'));
        } elseif (isset($values['old_image'])) {
            $values['image'] = $values['old_image'];
        }
        Slug::where('slugable_id', $post->id)->where('slugable_type', 'App\Models\Post')->delete();
        if ($request->has('is_component')) {
            $values['additional'] = getAdditional($values, array_diff(array_keys($section->componentfields['nonTrans']), $postFillable));
        } else {
            $values['additional'] = getAdditional($values, array_diff(array_keys($section->fields['nonTrans']), $postFillable));
        }

        foreach (config('app.locales') as $key => $locale) {

            if (! $request->has('is_component') && $values[$locale]['slug'] != $post->translations[$key]['slug']) {
                $values[$locale]['slug'] = str_replace(' ', '-', $values[$locale]['slug']);
            } elseif ($values[$locale]['title'] != $post->translations[$key]['title']) {
                $values[$locale]['slug'] = str_replace(' ', '-', $values[$locale]['slug']);
            } else {
                $values[$locale]['slug'] = $post->translations[$key]['slug'];
            }
            if ($request->has('is_component')) {
                $values[$locale]['locale_additional'] = getAdditional($values[$locale], array_diff(array_keys($section->componentfields['trans']), $postTransFillable));
            } else {
                $values[$locale]['locale_additional'] = getAdditional($values[$locale], array_diff(array_keys($section->fields['trans']), $postTransFillable));
            }
        }

        foreach (config('app.locales') as $key => $locale) {
            $post->slugs()->create([
                'fullSlug' => $locale.'/'.$values[$locale]['slug'],
                'slug' => $values[$locale]['slug'],
                'slugable_id' => $id,
                'locale' => $locale,
            ]);
        }
        $allOldFiles = PostFile::where('post_id', $post->id)->get();
        foreach ($allOldFiles as $key => $fil) {
            if (isset($values['old_file']) && count($values['old_file']) > 0) {
                if (! in_array($fil->id, array_keys($values['old_file']))) {
                    $fil->delete();
                }
            } else {
                $fil->delete();
            }
        }
        Post::find($post->id)->update($values);
        if (isset($values['files']) && count($values['files']) > 0) {
            $uploadedFiles = $this->uploadFiles($values['files'], config('config.file_path'));

            foreach ($uploadedFiles as $fileData) {
                $postFile = new PostFile;
                $postFile->type = $fileData['type'];
                $postFile->file = $fileData['path'];
                $postFile->title = $fileData['title'];
                $postFile->post_id = $post->id;
                $postFile->save();
            }
        }

        return $section;
    }
    public function deletePost($id)
    {
        $post = Post::where('id', $id)->first();
        $section = Section::where('id', $post->section_id)->with('translations')->first();
        if (File::exists(config('config.file_path').$post->image)) {
            File::delete(config('config.file_path').$post->image);
        }
        $files = PostFile::where('post_id', $post->id)->get();
        foreach ($files as $file) {
            if (File::exists(config('config.image_path').$file->file)) {
                File::delete(config('config.image_path').$file->file);
            }
            if (File::exists(config('config.image_path').'thumb/'.$file->file)) {
                File::delete(config('config.image_path').'thumb/'.$file->file);
            }
            $file->delete();
        }
        Slug::where('slugable_id', $post->id)->where('slugable_type', 'App\Models\Post')->delete();

        $post->delete();

       return $section;
    }
}
