<?php


namespace App\Services\Post;


use App\Models\Post;

class Service
{

    public function store($data) {

        $tags = $data['tags'];

        unset($data['tags']);

        $post = Post::create($data);

        $post->tags()->attach($tags);
    }

    public function update($data, $id) {
        $tags = $data['tags'];

        unset($data['tags']);

        $post = Post::find($id);

        $post->update($data);

        $post->tags()->sync($tags);

    }

}
