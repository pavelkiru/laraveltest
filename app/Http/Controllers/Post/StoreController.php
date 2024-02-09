<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class StoreController extends Controller {

    public function __invoke(){
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
            'category_id' => '',
            'tags' => '',
            'likes' => 'integer',
        ]);

        $tags = $data['tags'];
        unset($data['tags']);


        $post = Post::create($data);
        $post->tags()->attach($tags);

        return redirect()->route('posts.index');

    }

}
