<?php


namespace App\Http\Controllers\Post;


use App\Http\Controllers\Controller;
use App\Services\Post\Service;

class BaseControllers extends Controller
{
    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

}
