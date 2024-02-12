@extends('layouts.main')
@section('content')
<div class="posts">
    <div class="create_button_wr">
        <a href="{{ route('posts.create') }}" class="btn btn-primary">Create new post</a>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Image</th>
            <th scope="col">Category</th>
            <th scope="col">Tags</th>
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
                <td>
                    <img class="post_image_preview" src="{{ $post->image }}" alt="">
                </td>
                <td>{{ $post->category->title }}</td>
                <td>
                    @foreach($post->tags as $tag)
                        <span>{{ $tag->title }}</span>
                    @endforeach
                </td>
                <td>{{ $post->likes }}</td>
                <td>
                    <div class="d-flex">
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary me-1">Show</a>
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary me-1">Edit</a>


                        <form action="{{ route('posts.delete', $post->id)}}" method="post">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </div>
                </td>

            </tr>
        @endforeach

        </tbody>
    </table>




    <div class="pagination">
        {{ $posts->withQueryString()->links() }}
    </div>
</div>


@endsection
