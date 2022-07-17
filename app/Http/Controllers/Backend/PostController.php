<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Str;

class PostController extends Controller
{
    protected $slug_count = 0;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        return view('backend.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts|max:255',
            'body' => 'required',
            'post_type' => 'required',
        ]);

        $post = Post::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'body' => $request->body,
            'image' => $request->image,
            'image_thumb' => $request->image_thumb,
            'post_type' => $request->post_type,
            'post_date' => $request->post_date,
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->route('admin.post.edit', ['post' => $post])->with('success', 'Post created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        // $image = $post->getMedia('post_image');
        // $thumbnail = $post->getMedia('post_thumbnail');
        return view('backend.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //update post
        $post->update($request->only('title', 'slug', 'post_type', 'body', 'image', 'image_thumb', 'post_date'));

        return redirect()->route('admin.post.edit', $post)->withFlashSuccess(__('Post updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.post.index')->withFlashSuccess(__('Post deleted successfully.'));
    }

    public function checkSlug()
    {
        $slug = request()->get('slug');
        $id = request()->get('id');

        $post = Post::where('slug', $slug)->where('id', '!=', $id)->first();

        if ($post) {
            return response()->json(['status' => 'error', 'message' => 'Slug already exists.', 'exists' => true]);
        }

        return response()->json(['status' => 'success', 'exists' => false]);
    }

    public function generateSlug()
    {
        $title = request()->get('title');
        $id = request()->get('id');
        $slug = Str::slug($title);
        $post = Post::where('slug', $slug)->where('id', '!=', $id)->first();

        if ($post) {
            $this->slug_count++;
            $slug = $slug . '-' . $this->slug_count;
        }
        return response()->json(['status' => 'success', 'slug' => $slug]);
    }
}
