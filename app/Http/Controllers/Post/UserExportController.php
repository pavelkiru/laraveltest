<?php


namespace App\Http\Controllers\Post;


use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class UserExportController
{
    public function export()
    {
        return Excel::download(new UsersExport, 'users.csv');
    }
}
