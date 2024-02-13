<?php
namespace App\Http\Controllers\Admin\Post;


use App\Models\Post;

class ShowController extends BaseControllers {

    public function __invoke(Post $post){
        return view('admin.post.show', compact('post'));
    }

}
