<?php

test('slow test', function () {
    sleep(2);

    $this->expect(true)->toBe(true);
});
