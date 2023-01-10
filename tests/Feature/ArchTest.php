<?php

use Illuminate\Http\Request;

test('controllers')
    ->expect('App\Http\Controllers')
    ->not->toUse([Request::class, 'request']);

test('models')
    ->expect('App\Models')
    ->toOnlyUse('Illuminate\Database')
    ->toOnlyBeUsedOn('App\Repositories');

test('repositories')
    ->expect('App\Repositories')
    ->toOnlyUse('App\Models')
    ->toOnlyBeUsedOn('App\Http\Controllers');

test('globals')->expect(['request', 'env'])->each->not->toBeUsed();

test('facades')
    ->expect('Illuminate\Support\Facades')
    ->not->toBeUsed()
    ->ignoring(['App\Providers', 'App\Http\Middleware']);
