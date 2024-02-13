@extends('admin.base')
@section('main_content')
<div>

    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
    <img src="{{$post->image}}" alt="">
    <p>{{$post->likes}}</p>
    <div>
        <p>Category: {{ $post->category->title }}</p>
    </div>

    <div>
        <p>Tags</p>
        <ol>
            @foreach($post->tags as $tag)
                <li>{{ $tag->title }}</li>
            @endforeach
        </ol>
    </div>


</div>
<div>
    <a href="{{ route('admin.post.index') }}" class="btn btn-primary me-1">To posts</a>
</div>
@endsection
