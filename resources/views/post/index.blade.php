@extends('layouts.main')
@section('content')
    <div>
        <a class="btn btn-outline-primary" href="{{route('posts.create')}}">Create One</a>
        @foreach($posts as $post)
            <div><a href="{{route('posts.show', $post->id)}}">{{$post->id}}.{{$post->title}}</a></div>
        @endforeach
        <div>{{$posts->withQueryString()->links()}}</div>
    </div>
@endsection
