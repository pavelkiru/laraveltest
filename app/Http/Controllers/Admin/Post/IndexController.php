<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;
use App\Models\Post;

class IndexController extends BaseControllers {

    public function __invoke(FilterRequest $request){
   // public function __invoke( ){

     //   dd('sdfdsfdfs');

        //return view('admin.post.index');

        $data = $request->validated();

        $filter = app()->make(PostFilter::class, ['queryParams' => array_filter($data)]);

        $posts = Post::filter($filter)->paginate(10);

        return view('admin.post.index', compact('posts'));

    }

}
