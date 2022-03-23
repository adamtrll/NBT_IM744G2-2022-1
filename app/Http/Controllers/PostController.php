<?php

namespace App\Http\Controllers;

use Image;
use App\Models\User;
use App\Models\Post;
use App\Models\Topic;
use Illuminate\Http\Request;

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:2|max:240',
            'topic_id' => 'required|exists:topics,id',
            'description' => 'required',
            'content' => 'required',
            'cover' => 'file|image',
        ]);

        // todo replace this with the authenticated user
        $user = User::first();

        $post = $user->posts()->create($request->except('_token'));

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
        //
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
        //
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

        $fileName = uniqid();

        $cover = Image::make($file)->save(public_path("uploads/posts/{$fileName}.{$file->extension()}"));

        return $cover;
    }
}
