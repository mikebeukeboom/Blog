@extends('posts.layouts.layout')


@section('content')
    @foreach($posts as $post)
    @include('posts.posts.post')
    @endforeach
@endsection