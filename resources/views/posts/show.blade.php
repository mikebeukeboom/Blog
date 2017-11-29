@extends('posts.layouts.layout')

@section('content')
    <h2 class="blog-post-title">
        <a href="/posts/{{ $post->id }}">
            {{ $post->title }}
        </a></h2>
    <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }}
    <p>{{ $post->body }}</p>
    <hr/>

    <h2>Comment Section: </h2>
    <ul class="list-group">
        @foreach($post->comments as $comment)
            <li class="list-group-item">{{ $comment->body }}</li>
        @endforeach
    </ul>
    <hr/>
    <h1>Add a Comment</h1>

    <form method="POST" action="/posts/{{ $post->id }}/comments">
        {{ csrf_field() }}
        <div class="form-group">
            <textarea class="form-control" placeholder="Your Comment" name="body" required></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-outline-primary">Submit</button>
        </div>
    </form>
    @include('posts.layouts.errors')
@endsection