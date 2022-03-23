@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-md-8 col-lg-6 mx-auto">
        @foreach($posts as $post)
            @include('post._item')
        @endforeach
    </div>
</div>
{{ $posts->links() }}
@endsection
