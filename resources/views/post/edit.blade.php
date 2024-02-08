@extends('layouts.main')
@section('content')
    <div>


        <form action="{{ route('posts.update', $post->id) }}" method="post">
            @csrf

            @method('PATCH')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{old('title',$post->title)}}" placeholder="">
            </div>
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror


            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <input type="text" class="form-control" id="content" name="content" value="{{$post->content}}">
            </div>
            @error('content')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="text" class="form-control" id="image" name="image" value="{{$post->image}}">
            </div>
            @error('image')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="mb-3">
                <label for="likes" class="form-label">Likes</label>
                <input type="number" class="form-control" id="likes" name="likes" value="{{$post->likes}}">
            </div>
            @error('likes')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror




            <button type="submit" class="btn btn-primary">Update</button>
        </form>


    </div>
    <div>
        <a href="{{ route('posts.index') }}" class="btn btn-primary me-1">To posts</a>
    </div>

@endsection
