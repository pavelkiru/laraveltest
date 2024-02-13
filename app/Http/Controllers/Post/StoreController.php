<?php

namespace App\Http\Controllers\Post;

use App\Http\Requests\Post\StoreRequest;
use App\Http\Resources\Post\PostResource;
use App\Models\Post;

//        $data = $request->validated(); !!!!



class StoreController extends BaseControllers {

    public function __invoke(StoreRequest $request){

        $data = $request->validated();

        $post = $this->service->store($data);

        return new PostResource($post);

       // return redirect()->route('posts.index');

    }

}
