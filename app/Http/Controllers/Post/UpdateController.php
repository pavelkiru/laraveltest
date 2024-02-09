<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\UpdateRequest;
use App\Models\Post;

class UpdateController extends Controller {

    public function __invoke(UpdateRequest $request, $id){

        $data = $request->validated();

        $tags = $data['tags'];
        unset($data['tags']);

        $post = Post::find($id);
        $post->update($data);
        $post->tags()->sync($tags);

        return redirect()->route('posts.show', $id);
    }

}
