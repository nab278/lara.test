<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\PostController;

Route::get('/test', function () {
    return Response::json(['message' => 'Hello, World!']);
});


Route::get('/post', [PostController::class, 'index']);

