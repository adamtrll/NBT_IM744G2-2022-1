@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-lg-4 col-xl-3 text-center">
            <img class="mb-3 rounded-circle" src="{{ $user->avatar }}" alt="{{ $user->name }}">
            <h4 class="mb-3">{{ $user->name }}</h4>
            <p class="px-5 text-start">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta aspernatur libero vero corrupti fugiat exercitationem?</p>
        </div>
        <div class="col-lg-8 col-xl-9">
            @forelse($posts as $post)
                @include('post._item')
            @empty
                <div class="alert alert-warning">
                    {{ __('No posts to show') }}
                </div>
            @endforelse
            {{ $posts->links() }}
        </div>
    </div>
@endsection
