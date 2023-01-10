<?php

namespace App\Repositories;

use App\Models\Post;

class PostRepository
{
    public function all(): array
    {
        return Post::latest()->get()->all();
    }

    public function create(array $post): void
    {
        Post::create($data);
    }
}
