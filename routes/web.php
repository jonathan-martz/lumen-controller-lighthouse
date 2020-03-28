<?php

use Illuminate\Support\Facades\Route;

Route::get('/lighthouse/collection', [
    'middleware' => ['xss', 'https'],
    'uses' => 'App\Http\Controllers\LighthouseController@collection'
]);

Route::get('/lighthouse/view', [
    'middleware' => ['xss', 'https'],
    'uses' => 'App\Http\Controllers\LighthouseController@view'
]);

Route::get('/lighthouse/ranking', [
    'middleware' => ['xss', 'https'],
    'uses' => 'App\Http\Controllers\LighthouseController@ranking'
]);

Route::get('/lighthouse/ranking/country', [
    'middleware' => ['xss', 'https'],
    'uses' => 'App\Http\Controllers\LighthouseController@rankingCountry'
]);

Route::get('/lighthouse/ranking/topic', [
    'middleware' => ['xss', 'https'],
    'uses' => 'App\Http\Controllers\LighthouseController@rankingTopic'
]);