@extends('layouts.main')

@section('content')
    <h1 class="display-1">
        {{ $topic->title }}
    </h1>
    <p>{{ $topic->description }}</p>
    <div class="row">
        <div class="col-md-8 col-lg-6 mx-auto">
            @forelse($posts as $post)
                @include('post._item')
            @empty
                <div class="alert alert-warning">
                    {{ __('No posts to show') }}
                </div>
            @endforelse
        </div>
    </div>
    {{ $posts->links() }}
@endsection
