<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{




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
