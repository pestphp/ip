<?php

it('has a welcome page', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});
