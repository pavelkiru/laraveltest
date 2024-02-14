<?php

namespace App\Http\Controllers\Admin\Post;

use App\Exports\PostsExport;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends BaseControllers {

    public function __invoke(){

        return Excel::download(new PostsExport, 'posts.xls');
    }

}
