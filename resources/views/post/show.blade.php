@extends('layouts.main')

@section('content')
<h1 class="display-1">{{ $post->title }}</h1>
<p>{{ $post->author->name }} | {{ $post->topic->title }} | {{ $post->created_at->diffForHumans() }}</p>
<p class="fw-bold">{{ $post->description }}</p>
<div>
    {!! $post->content !!}
</div>
<div class="row">
    <div class="col-md-8 col-lg-6 mx-auto">
        <h5 class="display-5">
            {{ __('Comments') }}
        </h5>
        <form action="{{ route('post.comment', $post) }}" method="POST">
            @csrf
            <div class="mb-3">
                <textarea class="form-control" name="comment"></textarea>
            </div>
            <div class="d-grid">
                <button class="btn btn-primary">
                    {{ __('Comment') }}
                </button>
            </div>
        </form>
        <div class="mt-5">
            @foreach($post->comments as $comment)
                <div class="card mb-3" id="comment-{{$comment->id}}">
                    <div class="card-body">
                        <div class="mb-3 d-flex">
                            <div class="d-flex">
                                <a href="{{ route('profile.show', $comment->user) }}">
                                    <img class="rounded-circle me-2" width="25" src="{{ $comment->user->avatar }}" alt="{{ $comment->user->name }}">
                                </a>
                                <a href="{{ route('profile.show', $comment->user) }}">
                                    {{ $comment->user->name }}
                                </a>
                            </div>
                            <span class="ms-3">
                                {{ $comment->created_at->diffForHumans() }}
                            </span>
                        </div>
                        <div style="white-space: pre-line;">
                            {{ $comment->message }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
