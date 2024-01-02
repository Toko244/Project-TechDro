<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Component;
use App\Models\ComponentPost;
use App\Models\Post;
use App\Models\PostFile;
use App\Models\PostTranslation;
use App\Models\Section;
use Illuminate\Support\Facades\Redirect;
use App\Models\Slug;
use App\Repositories\Interfaces\PostRepositoryInterface;
use App\Repositories\Interfaces\SectionRepositoryInterface;
use App\Repositories\Interfaces\SlugRepositoryInterface;
use App\Traits\UploadImageTrait;
use Illuminate\Http\Request;

class PostController extends Controller
{
    use UploadImageTrait;

    public function __construct(
        private PostRepositoryInterface $postRepository,
        private SectionRepositoryInterface $sectionRepository,
        private SlugRepositoryInterface $slugRepository
    ) {
    }

    public function index($sec)
    {
        $section = Section::find($sec);
        if (isset($section->type) && in_array($section->type['type'], [2, 11])) {
            $post = Post::where('section_id', $sec)->with(['translations', 'slugs'])->first();
            return $post
                ? redirect()->route('post.edit', [app()->getLocale(), $post->id])
                : redirect()->route('post.create', [app()->getLocale(), $sec]);
        }

        $posts = Post::query()
            ->where('section_id', $sec)
            ->orderBy('date', 'desc')
            ->orderBy('created_at', 'asc')
            ->join('post_translations', 'posts.id', '=', 'post_translations.post_id')
            ->where('post_translations.locale', app()->getLocale())
            ->select(
                'posts.*',
                'post_translations.text',
                'post_translations.desc',
                'post_translations.title',
                'post_translations.locale_additional'
            )
            ->with(['translations'])
            ->paginate(settings('Paginate'));

        return view('admin.posts.list', compact('section', 'posts'));
    }


    public function create($id, Request $request)
    {
        $path = explode("/", $request->path());
        if (isset($path['2']) && $path['2'] == 'section') {
            $section = Section::find($id);
            return view('admin.posts.add', compact('section'));
        }
        if (isset($path['2']) && $path['2'] == 'component') {
            $component = Component::find($id);
            return view('admin.posts.add', compact('component'));
        }
    }

    public function store($sec, StorePostRequest $request)
    {
        $data = $request->all();
        $postFillable = (new Post)->getFillable();
        $postTransFillable = (new PostTranslation)->getFillable();

        $section = Section::where('id', $sec)->first();
        // Handle Post Slugs ------
        if ($data['type'] == 'sectionTypes') {
            if ($request->hasFile('thumb')) {
                $image = $request->file('thumb');
                $fileName = $image->getClientOriginalName();
                $image->move(config('config.image_path') . config('config.thumb_path'), $fileName);
                $data['thumb'] = '';
                $data['thumb'] = $fileName;
            }

            $data['additional'] = getAdditional($data, array_diff(array_keys($section->fields['nonTrans']), $postFillable));
            foreach (config('app.locales') as $locale) {
                $data[$locale]['locale_additional'] = getAdditional($data[$locale], array_diff(array_keys($section->fields['trans']), $postTransFillable));
            }

            $post = $this->postRepository->createPost($data);
            foreach (config('app.locales') as $locale) {
                $post->slugs()->create([
                    'fullSlug' => $data[$locale]['slug'],
                    'slug' => $data[$locale]['slug'],
                    'locale' => $locale,
                ]);
            }
            // dd($post);
            if (isset($data['files']) && count($data['files']) > 0) {
                foreach ($data['files'] as $key => $files) {
                    foreach ($files['file'] as $k => $file) {
                        $postFile = new PostFile;
                        $postFile->type = $key;
                        $postFile->file = $file;
                        $postFile->title = $data['files'][$key]['title'][$k];
                        $postFile->file_additional = collect([
                            'ka' => $data['files'][$key]['alt_text']['ka'][$k],
                            'en' => $data['files'][$key]['alt_text']['en'][$k],
                        ]);
                        $postFile->post_id = $post->id;
                        $postFile->save();
                    }
                }
            }
            $post = $post->load('files', 'slugs', 'author');
            return redirect()->route('post.list', [app()->getLocale(), $section->id]);
        } elseif ($data['type'] == 'componentTypes') {
            $component = Component::where('id', $data['component_id'])->first();
            // dd($component);
            if ($request->hasFile('thumb')) {
                $image = $request->file('thumb');
                $fileName = $image->getClientOriginalName();
                $image->move(config('config.image_path') . config('config.thumb_path'), $fileName);
                $data['thumb'] = '';
                $data['thumb'] = $fileName;
            }
            $data['additional'] = getAdditional($data, array_diff(array_keys($component->fields['nonTrans']), $postFillable));
            foreach (config('app.locales') as $locale) {
                $data[$locale]['locale_additional'] = getAdditional($data[$locale], array_diff(array_keys($component->fields['trans']), $postTransFillable));
            }
            $post = $this->postRepository->createPost($data);
            $this->postRepository->addConnectedPosts($data, $post->id);
            if (isset($request['files']) && count($request['files']) > 0) {

                foreach ($request['files'] as $key => $files) {
                    foreach ($files['file'] as $k => $file) {
                        $postFile = new PostFile;
                        $postFile->type = $key;
                        $postFile->file = $file;
                        $postFile->title = $request['files'][$key]['desc'][$k];
                        $postFile->post_id = $post->id;
                        $postFile->save();
                    }
                }
            }

            $post = $post->load('files', 'slugs', 'author');

            return redirect()->route('componentPosts.index', ['locale' => app()->getLocale(), 'component_id' => $data['component_id']]);
        }
    }

    public function edit($id)
    {
        $post = $this->postRepository->getPostById($id);

        $section = $post['section'];
        $slug = Slug::where('slugable_id', $post->id)->where('slugable_type', 'App\Models\Post')->pluck('slug', 'locale');
        if (ComponentPost::where('post_id', $id)->exists()) {
            $componentpost = ComponentPost::where('post_id', $id)->first();
            $component = Component::where('id', $componentpost->component_id)->with('translations')->first();

            return view('admin.posts.edit', compact('section', 'component', 'post', 'slug'));
        } else {
            return view('admin.posts.edit', compact('section','post', 'slug'));
        }
    }

    public function update($id, UpdatePostRequest $request)
    {
        $data = $request->all();
        Post::find($id)->slugs()->delete();

        $postFillable = (new Post)->getFillable();
        $postTransFillable = (new PostTranslation)->getFillable();
        $post = Post::find($id);
        if (ComponentPost::where('post_id', $post->id)->exists()) {
            $componentpost = ComponentPost::where('post_id', $post->id)->first();
            $component = Component::where('id', $componentpost->component_id)->with('translations')->first();
        }

        $section = Section::where('id', $post->section_id)->with('translations')->first();

        if ($data['type'] == 'sectionTypes') {
            $data['additional'] = getAdditional($data, array_diff(array_keys($section->fields['nonTrans']), $postFillable));

            if ($request->hasFile('thumb')) {
                $image = $request->file('thumb');
                $fileName = $image->getClientOriginalName();
                $image->move(config('config.image_path') . config('config.thumb_path'), $fileName);
                $data['thumb'] = '';
                $data['thumb'] = $fileName;
            }

            if (isset($data['files']) && count($data['files']) > 0) {
                foreach ($data['files'] as $key => $files) {
                    foreach ($files['file'] as $k => $file) {
                        $postFile = new PostFile;
                        $postFile->type = $key;
                        $postFile->file = $file;
                        $postFile->title = $data['files'][$key]['title'][$k];
                        $postFile->file_additional = collect([
                            'ka' => $data['files'][$key]['alt_text']['ka'][$k],
                            'en' => $data['files'][$key]['alt_text']['en'][$k],
                        ]);
                        $postFile->post_id = $post->id;
                        $postFile->save();
                    }
                }
            }

            $slugs = $this->slugRepository->initiateMany($request->validated());

            foreach (config('app.locales') as $locale) {
                $post->slugs()->updateOrCreate(['locale' => $locale], ['slug' => $slugs[$locale]['slug'], 'fullSlug' => $slugs[$locale]['fullSlug']]);
                $data[$locale]['locale_additional'] = getAdditional($data[$locale], array_diff(array_keys($section->fields['trans']), $postTransFillable));
            }

            $this->postRepository->updatePost($id, $data);

        } elseif ($data['type'] == 'componentTypes') {
            $data['additional'] = getAdditional($data, array_diff(array_keys($component->fields['nonTrans']), $postFillable));

            foreach (config('app.locales') as $locale) {
                $data[$locale]['locale_additional'] = getAdditional($data[$locale], array_diff(array_keys($component->fields['trans']), $postTransFillable));
            }

            $post = $post->load('files', 'slugs', 'author');

            $allOldFiles = PostFile::where('post_id', $post->id)->get();
            foreach ($allOldFiles as $key => $fil) {
                if (isset($data['old_file']) && count($data['old_file']) > 0) {
                    if (!in_array($fil->id, array_keys($data['old_file']))) {
                        $fil->delete();
                    }
                } else {
                    $fil->delete();
                }
            }
            $post = $this->postRepository->updatePost($id, $data);
        }


        return redirect()->back();
    }



    public function deletefiles(Request $request)
    {
        // dd($request->locale);
        $post = PostTranslation::where([['post_id', $request->post_id], ['locale', $request->locale]])->first();
        $publications = collect($post['locale_additional']['publications']);
        $publications->map(function ($item, $index) use ($publications, $request) {
            $publications->forget($request->key);

            return $publications;
        });
        $publications = $publications->toArray();
        PostTranslation::where([['post_id', $request->post_id], ['locale', $request->locale]])->update(['locale_additional' => ['publications' => $publications]]);
        $post = PostTranslation::where([['post_id', $request->post_id], ['locale', $request->locale]])->first();

        return response()->json(['success' => 'File Deleted']);
    }

    public function destroy($id)
    {

        $post = $this->postRepository->deletePost($id);

        return redirect()->route('post.list', [app()->getLocale(), $post->id]);
    }
    public function deleteImage($id)
    {
        $post = Post::findOrFail($id);

        if ($post->thumb) {
            $imagePath = public_path(config('config.image_path') . config('config.thumb_path') . $post->thumb);

            if (file_exists($imagePath)) {
                unlink($imagePath);
            }

            $post->update(['thumb' => null]);
        }

        return response()->json(['success' => 'File Deleted']);
    }
    public function deletepin($id, Request $request)
    {
        $post = Post::findOrFail($id);

        // Get the pin ID from the request
        $pinId = $request->input('pinId');

        // Convert the collection to an array
        $additionalArray = $post->additional->toArray();

        // Check if the "pin" key is present and is an array
        if (isset($additionalArray['pin']) && is_array($additionalArray['pin'])) {
            // Check if the pin with the specified ID exists
            if (isset($additionalArray['pin'][$pinId])) {
                // Remove the pin with the specified ID
                unset($additionalArray['pin'][$pinId]);

                // Convert the modified array back to a collection
                $post->additional = collect($additionalArray);

                // Save the updated Post model
                $post->save();

                return response()->json(['success' => true]);
            }

            return response()->json(['success' => false, 'message' => 'Pin not found']);
        }

        return response()->json(['success' => false, 'message' => 'Invalid additional data']);
    }
}
