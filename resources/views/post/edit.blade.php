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
                <label for="category" class="form-label">Category</label>
                <select name="category" id="category">
                    @foreach($all_categories as $all_cat)
                        <option
                            value="{{ $all_cat->id }}" {{ ($all_cat->id == $post->category->id) ? 'selected' : '' }}>
                            {{ $all_cat->title}}
                        </option>
                    @endforeach
                </select>
            </div>

            @error('category')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror


            <div class="mb-3">
                <label for="tags" class="form-label">Tags</label>
                <select name="tags[]" id="tags" multiple>
                    @foreach($all_tags as $all_tag)
                        <option value="{{ $all_tag->id }}"

                            @foreach($post->tags as $tag)
                                @if ( $all_tag->id == $tag->id)
                                    selected
                                @endif
                            @endforeach
                        >{{ $all_tag->title }}</option>
                    @endforeach
                </select>
            </div>

            @error('tags')
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
