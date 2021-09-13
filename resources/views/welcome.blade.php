@extends('layouts.main')

@section('content')
    <form action = "/" method = "POST">
        @csrf
        <div class = "col text-center">
            <h3> Title </h3>
            <input name = "titleText" id = "titleText" type="text">
        </div>
        <br>
        <div class = "col text-center">
            <h3> Input Text </h3>
            <textarea name = "thisInput" id = "textInput" style="resize: none"></textarea>
        </div>
        <div class="col text-center">
            <button class = "btn btn-primary"> Save Text </button>
            <a class = "btn btn-primary" href="userPosts"> See posts </a>
        </div>
    </form>
@endsection
