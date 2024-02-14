<?php

namespace App\Http\Controllers\Post;

use App\Http\Requests\Post\StoreRequest;
use App\Http\Resources\Post\PostResource;
use App\Models\Post;
use Illuminate\Http\Resources\Json\JsonResource;

//        $data = $request->validated(); !!!!



class StoreController extends BaseControllers {

    public function __invoke(StoreRequest $request){

        $data = $request->validated();

        $post = $this->service->store($data);

        return $post instanceof Post ? new PostResource($post) : $post;

        //return new PostResource($post);

       // return redirect()->route('posts.index');

    }

}
