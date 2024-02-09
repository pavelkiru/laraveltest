<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;

class CreateController extends Controller {

    public function __invoke(){
        $all_tags = Tag::all();
        $all_categories = Category::all();

        return view('post.create', compact('all_tags', 'all_categories'));
    }

}
