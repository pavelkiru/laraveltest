<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class EditController extends BaseControllers {

    public function __invoke(Post $post){

        $all_tags = Tag::all();
        $all_categories = Category::all();

        return view('admin.post.edit', compact('post', 'all_tags', 'all_categories'));
    }

}
