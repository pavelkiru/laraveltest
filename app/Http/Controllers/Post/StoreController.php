<?php

namespace App\Http\Controllers\Post;

use App\Http\Requests\Post\StoreRequest;
use App\Models\Post;

//class StoreController extends BaseControllers {
//
//    public function __invoke(StoreRequest $request){
//
//        $data = $request->validate();
//
//        $this->service->store($data);
//
//        return redirect()->route('posts.index');
//
//    }
//
//}


class StoreController extends BaseControllers {
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
