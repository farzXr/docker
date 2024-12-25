@extends('layouts.main')
@section('content')
    <div>
        <form action="{{route('posts.update', $post->id)}}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" value="{{$post->title}}">
            </div>
            <div class="mb-3">
                <label for="Content" class="form-label">Content</label>
                <textarea class="form-control" name="content" id="Content">{{$post->content}}</textarea>
            </div>
            <select class="mb-3 form-select" aria-label="Default select example" name="catigory_id">
                @foreach($catigories as $catigory)
                    <option
                        {{$post->catigory->id == $catigory->id ? 'selected' : ''}}
                        value="{{$catigory->id}}">{{$catigory->title}}</option>
                @endforeach
            </select>
            <select class="form-select" multiple aria-label="Multiple select example" id="tags" name="tags[]">
                @foreach($tags as $tag)
                    <option
                        @foreach($post->tags as $postTag)
                            {{$postTag->id == $tag->id ? 'selected' : ''}}
                        @endforeach
                        value="{{$tag->id}}">{{$tag->title}}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
@endsection
