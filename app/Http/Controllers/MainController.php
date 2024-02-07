<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index() {

        $posts = Post::all();

        return view('posts', compact('posts'));



//        foreach ($posts as $post) {
//            dump($post->id, $post->title);
//        }
//
//        return 'PostController';
    }

    public function create() {

        $posts_arr = [
            [
                'title' => 'test title 2',
                'content' => 'test content 2',
                'image' => ' test image 2',
                'likes' => 2,
                'is_published' => 1,
                '' => '',
            ],
            [
                'title' => 'test title 3',
                'content' => 'test content 3',
                'image' => ' test image 3',
                'likes' => 3,
                'is_published' => 1,
                '' => '',
            ],
            [
                'title' => 'test title 4',
                'content' => 'test content 4',
                'image' => ' test image 5',
                'likes' => 6,
                'is_published' => 1,
                '' => '',
            ]
        ];

        foreach ($posts_arr as $post) {
            Post::create($post);
        }

        dump('created');
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
