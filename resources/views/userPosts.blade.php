@extends('layouts.main')

@section('content')
    @if(count($posts) > 0)
        @foreach($posts as $key)
            <div class = "col text-center">
                <a href="/openPost/{{ $key['id'] }}"> <h4>{{ $key['title_text'] }} </h4></a>
            </div>
            <hr>
        @endforeach
    @else
        <div class = "col text-center">
            <h4> No posts saved yet. </h4>
        </div>
    @endif
    <br>
    <div class = "col text-center">
    <a class = "btn btn-primary" href="/"> Create a post </a>
    </div>
@endsection
