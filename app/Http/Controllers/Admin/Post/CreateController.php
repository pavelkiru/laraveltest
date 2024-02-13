<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Category;
use App\Models\Tag;

class CreateController extends BaseControllers {

    public function __invoke(){
        $all_tags = Tag::all();
        $all_categories = Category::all();

        return view('admin.post.create', compact('all_tags', 'all_categories'));
    }

}
