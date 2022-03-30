<?php

namespace App\View\Composers;

use App\Models\Topic;
use Illuminate\View\View;

class TopicViewComposer
{
    public function compose(View $view)
    {
        $topics = Topic::orderBy('title')->get();
        $view->with('topics', $topics);
    }
}
