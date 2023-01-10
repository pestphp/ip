<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostStoreRequest;
use App\Repositories\PostRepository;
use Illuminate\Http\RedirectResponse;

class PostController
{
    public function __construct(
        protected PostRepository $posts
    ) {
        // ...
    }

    public function index(): array
    {
        return $this->posts->all();
    }

    public function store(PostStoreRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $this->posts->create($data);

        return to_route('posts.index');
    }
}
