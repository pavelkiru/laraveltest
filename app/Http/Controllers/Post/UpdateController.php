<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class UpdateController extends Controller {

    public function __invoke($id){
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

        $post = Post::find($id);
        $post->update($data);
        $post->tags()->sync($tags);

        return redirect()->route('posts.show', $id);
    }

}
