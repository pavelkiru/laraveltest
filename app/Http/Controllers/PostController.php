<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }

    public function create()
    {

        $all_tags = Tag::all();
        $all_categories = Category::all();

        return view('post.create', compact('all_tags', 'all_categories'));
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
//            'category' => '',
//            'tags' => '',
            'likes' => 'integer',
        ]);

     //  dd($data);

        Post::create($data);
        return redirect()->route('posts.index');

    }

    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }


    public function edit(Post $post)
    {

        $all_tags = Tag::all();
        $all_categories = Category::all();

        return view('post.edit', compact('post', 'all_tags', 'all_categories'));
    }


    public function update($id)
    {

        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
            'category' => '',
            'tags' => '',
            'likes' => 'integer',
        ]);

        dd($data);

        $post = Post::find($id);

        $post->update($data);

        return redirect()->route('posts.show', $id);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }


    public function firstOrCreate()
    {

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

    public function updateOrCreate()
    {

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
