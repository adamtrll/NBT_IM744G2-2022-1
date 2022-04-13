<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function show(Topic $topic)
    {
        $posts = $topic->posts()->orderBy('created_at', 'desc')->paginate(8);

        return view('topic.show')->with(compact('topic', 'posts'));
    }
}
