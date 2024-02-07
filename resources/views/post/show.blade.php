@extends('layouts.main')
@section('content')
<div>
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
    <img src="{{$post->image}}" alt="">
    <p>{{$post->likes}}</p>



</div>

@endsection
