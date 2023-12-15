<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostTranslation;

use App\Models\Section;
use App\Repositories\Interfaces\PostRepositoryInterface;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function __construct(private PostRepositoryInterface $postRepository)
    {

    }

    public function index($sec)
{
     $this->postRepository->getAllPosts($sec);
     $section = Section::where('id', $sec)->with('translations')->first();

    $posts = Post::where('section_id', $sec)->orderBy('date', 'desc')->orderBy('created_at', 'desc')->with('translation')->get();

    return view('admin.posts.list', compact('section', 'posts'));
}

    public function create($sec)
    {

        $section = $this->postRepository->createPost($sec);

        return view('admin.posts.add', compact(['section']));

    }

    public function store($sec, Request $request)
    {
        $section = $this->postRepository->storePost($sec, $request);
        $sectionId = $section->id;

        return redirect()->route('post.list', [app()->getLocale(), $sectionId]);
    }

    public function edit($id)
    {
        $values =  $this->postRepository->getPostById($id);
        $section = $values['section'];
        $post = $values['post'];

        return view('admin.posts.edit', compact('section', 'post'));
    }

    public function update($id, Request $request)
    {
        $section = $this->postRepository->updatePost($id, $request);

        $sectionId = $section->id;

        return redirect()->route('post.list', [app()->getLocale(), $sectionId]);
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
        $section = $this->postRepository->deletePost($id);
        $sectionId = $section->id;
        return redirect()->route('post.list', [app()->getLocale(), $sectionId]);
    }
}
