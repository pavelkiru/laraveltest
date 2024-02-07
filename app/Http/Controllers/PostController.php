<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller
{
    //
    public function index() {

        $posts = Post::all();

        return view('post.index', compact('posts'));



//        foreach ($posts as $post) {
//            dump($post->id, $post->title);
//        }
//
//        return 'PostController';
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

        //return view('post.create');

    }

    public function show(Post $post) {

        return view('post.show', compact('post'));

    }




    public function update() {

        $post = Post::find(5);
        dump($post);



        $post->update([
           'title' => 'updated title'
        ]);

        $post2 = Post::find(5);
        dump($post2);
    }

    public function delete() {
       // findOrFail

        $post = Post::findOrFail(7);

        $post->delete();

        dump('deleted');
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
