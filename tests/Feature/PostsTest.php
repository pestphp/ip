<?php

use App\Models\Post;

it('can be listed', function () {
    Post::factory()->create([
        'message' => 'Laracon EU',
    ]);

    $this->get('/posts')
        ->assertStatus(200)
        ->assertSee('Laracon EU');
});

it('can be created')->todo();
