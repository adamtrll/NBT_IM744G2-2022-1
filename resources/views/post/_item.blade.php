<div class="card mb-3">
    <div class="card-body">
        <div class="d-flex">
            <img width="150" height="150" src="{{ $post->cover_image }}" alt="{{ $post->title }}" style="object-fit: cover;">
            <div class="ms-3">
                <h4 class="display-4">{{ $post->title }}</h4>
                <div class="mb-3 d-flex">
                    <div class="d-flex">
                        <img class="rounded-circle me-2" width="25" src="{{ $post->author->avatar }}" alt="{{ $post->author->name }}">
                        {{ $post->author->name }}
                    </div>
                    <div class="ms-3">{{ $post->created_at->diffForHumans() }}</div>
                    <div class="ms-3">{{ $post->topic->title }}</div>
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
