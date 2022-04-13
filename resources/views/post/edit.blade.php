@extends('layouts.main')

@push('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/33.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error( error )
        })
</script>
@endpush

@section('content')
<form action="{{ route('post.edit', $post) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="d-flex align-items-center mb-3">
        <h3 class="display-3">{{ __('Updating') }} {{ $post->title }}</h3>
        <button class="ms-auto btn btn-primary">Update</button>
    </div>
    <div class="row">
        <div class="col-lg-8 col-md-6">
            <div class="card">
                <div class="card-body">
                    <x-forms.input name="title" label="{{ __('Title') }}" value="{{ $post->title }}" />
                    <div class="mb-3">
                        <label for="description">{{ __('Description') }}</label>
                        <textarea class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description">{{ old('description', $post->description) }}</textarea>
                        @if ($errors->has('description'))
                            <p class="invalid-feedback">{{ $errors->first('description') }}</p>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="content">{{ __('Content') }}</label>
                        <textarea id="editor" class="form-control{{ $errors->has('content') ? ' is-invalid' : '' }}" name="content">{{ old('content', $post->content) }}</textarea>
                        @if ($errors->has('content'))
                            <p class="invalid-feedback">{{ $errors->first('content') }}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="topic_id">{{ __('Topic') }}</label>
                        <select class="form-control{{ $errors->has('topic_id') ? ' is-invalid' : '' }}" name="topic_id">
                            <option value="">{{ __('Please choose') }}</option>
                            @foreach($topics as $topic)
                                <option value="{{ $topic->id }}" {{ old('topic_id', $post->topic_id) == $topic->id ? 'selected' : '' }}>
                                    {{ $topic->title }}
                                </option>
                            @endforeach
                        </select>
                        @if ($errors->has('topic_id'))
                            <p class="invalid-feedback">{{ $errors->first('topic_id') }}</p>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="cover">{{ __('Cover image') }}</label>
                        <input class="form-control{{ $errors->has('cover') ? ' is-invalid' : '' }}" type="file" name="cover" value="{{ old('cover') }}">
                        @if ($errors->has('cover'))
                            <p class="invalid-feedback">{{ $errors->first('cover') }}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
