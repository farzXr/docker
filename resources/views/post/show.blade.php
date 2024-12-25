@extends('layouts.main')
@section('content')
    <div>
        <div>Title</div>
        <div>{{$post->id}}.{{$post->title}}</div>
        <div>Content</div>
        <div>{{$post->content}}</div>
        <div>Catigory</div>
        <div>{{$post->catigory->title}}</div>
        <div>Tags</div>
        @foreach($post->tags as $tag)
            <div>{{$tag->title}}</div>
        @endforeach
        <div><a href="{{route('posts.index')}}">Back</a></div>
        <div><a href="{{route('posts.edit',  $post->id)}}">Edit</a></div>
        <form action="{{route('posts.destroy',$post->id)}}" method="post">
            @csrf
            @method('delete')
            <button class="btn btn-danger" type="submit" value="Delete">Delete</button>
        </form>
    </div>
@endsection
