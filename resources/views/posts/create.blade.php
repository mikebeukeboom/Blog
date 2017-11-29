@extends('posts.layouts.layout')


@section('content')
    <h1>New Blogpost</h1>
    <hr/>
    <form method="POST" action="/posts">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="Title">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="blogpost">Blog Post</label>
            <textarea class="form-control" name="body"></textarea>
        </div>
        <button type="submit" class="btn btn-outline-primary">Submit</button>
    </form>
@endsection