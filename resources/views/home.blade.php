@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-md-8 col-lg-6 mx-auto">
        @foreach($posts as $post)
        <div class="card mb-3">
            <div class="card-body">
                <div class="d-flex">
                    <img width="150" height="150" src="https://via.placeholder.com/350" alt="{{ $post->title }}">
                    <div class="ms-3">
                        <h4 class="display-4">{{ $post->title }}</h4>
                        <div class="mb-3">
                            {{ $post->author->name }} | {{ $post->created_at->diffForHumans() }} | {{ $post->topic->title }}
                        </div>
                        <p class="fw-bold">
                            {{ $post->description }}
                        </p>
                        <div class="text-end">
                            <a class="btn btn-sm btn-primary" href="{{ route('post.details', $post)}}">
                                Read more
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
{{ $posts->links() }}
@endsection
