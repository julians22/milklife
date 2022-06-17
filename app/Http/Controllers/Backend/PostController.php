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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $image = $post->getMedia('post_image');
        $thumbnail = $post->getMedia('post_thumbnail');
        return view('backend.posts.edit', compact('post', 'thumbnail', 'image'));
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
        $post->update($request->only('title', 'slug', 'post_type', 'body'));

        //update image
        if ($request->hasFile('image')) {
            $post->clearMediaCollection('post_image');

            $post->addMedia($request->file('image'))->toMediaCollection('post_image');
        }

        // update thumbnail
        if ($request->hasFile('thumbnail')) {
            $post->clearMediaCollection('post_thumbnail');

            $post->addMedia($request->file('thumbnail'))->toMediaCollection('post_thumbnail');
        }

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
        //
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
