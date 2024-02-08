<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{

    public function index() {

        $posts = Post::all();

        return view('post.index', compact('posts'));
    }

    public function create() {
        return view('post.create');
    }

    public function store() {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
            'likes' => 'integer',
        ]);

        Post::create($data);
        return redirect()->route('posts.index');

    }

    public function show(Post $post) {
      //  $post = Post::find($id);
        return view('post.show', compact('post'));
    }


    public function edit(Post $post) {
        //$post = Post::find($id);
        return view('post.edit', compact('post'));
    }


    public function update($id) {

        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
            'likes' => 'integer',
        ]);

        $post = Post::find($id);

        $post->update( $data );

        return redirect()->route('posts.show', $id);
    }

    public function destroy(Post $post) {
        $post->delete();
        return redirect()->route('posts.index');
    }



    public function firstOrCreate() {

        $post = Post::firstOrCreate([
            'title' => '5555566'
        ], [
            'title' => 'test title 2',
            'content' => 'firstOrCreate content 2',
            'image' => ' test image 2',
            'likes' => 2,
            'is_published' => 1,
            '' => '',
        ]);

        dd($post->content);
    }

    public function updateOrCreate() {

        $post = Post::updateOrCreate([
            'title' => '000000000'
        ], [
            'title' => '000000000',
            'content' => '656565656',
            'image' => ' test image 2',
            'likes' => 2,
            'is_published' => 1,
        ]);

        dd($post->content);
    }

}
