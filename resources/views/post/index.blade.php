@extends('layouts.main')
@section('content')
<div>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Image</th>
            <th scope="col">Likes</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>

        @foreach($posts as $post)
            <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>{{ $post->title }}</td>
                <td>{{ $post->content }}</td>
                <td>{{ $post->image }}</td>
                <td>{{ $post->likes }}</td>
                <td><a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">Show</a></td>
            </tr>
        @endforeach

        </tbody>
    </table>

</div>

<div class="">
    <a href="{{ route('posts.create') }}" class="btn btn-primary">Create</a>
</div>

@endsection
