@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-lg-6 col-md-10 mx-auto">
        <div class="card">
            <div class="card-body">
                <h3 class="display-3">{{ __('Publish') }}</h3>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
                <form action="{{ route('post.create') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title">{{ __('Title') }}</label>
                        <input class="form-control" type="text" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="topic_id">{{ __('Topic') }}</label>
                        <select class="form-control" name="topic_id">
                            <option value="">{{ __('Please choose') }}</option>
                            @foreach($topics as $topic)
                                <option value="{{ $topic->id }}">{{ $topic->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="description">{{ __('Description') }}</label>
                        <textarea class="form-control" name="description"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="content">{{ __('Content') }}</label>
                        <textarea class="form-control" name="content"></textarea>
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg">Publish</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
