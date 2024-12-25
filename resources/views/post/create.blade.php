@extends('layouts.main')
@section('content')
    <div>
        <form action="{{route('posts.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="title"
                       value="{{old('title')}}">
                @error('title')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="Content" class="form-label">Content</label>
                <textarea class="form-control" name="content" id="Content" placeholder="content">{{old('content')}}</textarea>
                @error('content')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <label for="catigories">Catigory</label>
            <select class="mb-3 form-select" aria-label="Default select example" id="catigory" name="catigory_id">
                <option selected>Open this select menu</option>
                @foreach($catigories as $catigory)
                    <option {{$catigory->id == old('catigory_id') ? 'selected' : ''}}
                        value="{{$catigory->id}}">{{$catigory->title}}</option>
                @endforeach
            </select>
            @error('catigory_id')
            <p class="text-danger">{{$message}}</p>
            @enderror
            <div>
                <label for="tags">Tags</label>
                <select class="form-select" multiple aria-label="Multiple select example" id="tags"
                        name="tags[]">
                    @foreach($tags as $tag)
                        <option value="{{$tag->id}}">{{$tag->title}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
