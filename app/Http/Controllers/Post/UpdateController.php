<?php

namespace App\Http\Controllers\Post;

use App\Http\Requests\Post\UpdateRequest;
use App\Http\Resources\Post\PostResource;
use App\Models\Post;
use Illuminate\Http\Resources\Json\JsonResource;

class UpdateController extends BaseControllers {

    public function __invoke(UpdateRequest $request, Post $post){


        $data = $request->validated();



        $post = $this->service->update($post, $data);

        return $post instanceof Post ? new PostResource($post) : $post;



      //  return new PostResource($post);

    //    return redirect()->route('posts.show', $id);
    }

}
