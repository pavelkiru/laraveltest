<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class EditController extends Controller {

    public function __invoke(Post $post){

        $all_tags = Tag::all();
        $all_categories = Category::all();

        return view('post.edit', compact('post', 'all_tags', 'all_categories'));
    }

}
