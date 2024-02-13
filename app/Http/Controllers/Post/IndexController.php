<?php

namespace App\Http\Controllers\Post;

use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;
use App\Http\Resources\Post\PostResource;
use App\Models\Post;

class IndexController extends BaseControllers {

    public function __invoke(FilterRequest $request){


       // $this->authorize('view', auth()->user());

        $data = $request->validated();

        $page = $data['page'] ?? 1;
        $per_page = $data['per_page'] ?? 10;

        $filter = app()->make(PostFilter::class, ['queryParams' => array_filter($data)]);

        $posts = Post::filter($filter)->paginate($per_page, ['*'], 'page', $page);

        //$posts = Post::all();

        return PostResource::collection($posts);

        //return view('post.index', compact('posts'));


    }

}
