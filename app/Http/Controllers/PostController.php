<?php

namespace App\Http\Controllers;

use Image;
use Auth;
use App\Models\User;
use App\Models\Post;
use App\Models\Topic;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $topics = Topic::orderBy('title')->get();

        return view('post.create')->with(['topics' => $topics]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\PostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $post = Auth::user()->posts()->create($request->except('_token'));

        $image = $this->uploadImage($request);

        if ($image) {
            $post->cover = $image->basename;
            $post->save();
        }

        return redirect()
            ->route('post.details', $post)
            ->with('success', __('Post published successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('post.show')->with(compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        if ($post->author != Auth::user()) {
            return abort(403);
        }

        $topics = Topic::orderBy('title')->get();

        return view('post.edit')->with(compact('post', 'topics'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\PostRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
    {
        if ($post->author != Auth::user()) {
            return abort(403);
        }

        $post->update($request->except('_token'));

        $image = $this->uploadImage($request);

        if ($image) {
            if ($post->cover) {
                // todo delete previous cover image from server
            }

            $post->cover = $image->basename;
            $post->save();
        }

        return redirect()
            ->route('post.edit', $post)
            ->with('success', __('Post updated successfully'));
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

    private function uploadImage(Request $request)
    {
        $file = $request->file('cover');

        if (!$file) {
            return;
        }

        $fileName = uniqid();

        $cover = Image::make($file)->save(public_path("uploads/posts/{$fileName}.{$file->extension()}"));

        return $cover;
    }
}
