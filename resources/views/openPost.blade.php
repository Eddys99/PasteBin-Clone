@extends('layouts.main')

@section('content')
    <div class = "col text-center" id = "title">
        <h3> {{ $posts['title_text'] }} </h3>
    </div>
    <div class = "col text-center" id = "content">
        <small> {{ $posts['this_text'] }} </small>
    </div>
    <hr>
    <br>
    <div class = "col text-center">
        <a class = "btn btn-primary" href="/"> Create a post </a>
        <a class = "btn btn-primary" href="/userPosts/"> Back to your posts </a>
    </div>
@endsection