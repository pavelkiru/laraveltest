<?php

namespace App\Http\Controllers\Post;

use App\Http\Requests\Post\UpdateRequest;
use App\Models\Post;

class UpdateController extends BaseControllers {

    public function __invoke(UpdateRequest $request, $id){

        $data = $request->validated();

        $this->service->update($data, $id);

        return redirect()->route('posts.show', $id);
    }

}
