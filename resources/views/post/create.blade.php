@extends('layouts.main')
@section('content')
<div>


    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <input type="text" class="form-control" id="content" name="content">
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text" class="form-control" id="image" name="image">
        </div>

        <div class="mb-3">
            <label for="likes" class="form-label">Likes</label>
            <input type="number" class="form-control" id="likes" name="likes">
        </div>




        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


</div>


@endsection
