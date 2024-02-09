<?php

namespace App\Http\Controllers\Post;

use App\Http\Requests\Post\StoreRequest;

class StoreController extends BaseControllers {

    public function __invoke(StoreRequest $request){

        $data = $request->validate();

        $this->service->store($data);

        return redirect()->route('posts.index');

    }

}
