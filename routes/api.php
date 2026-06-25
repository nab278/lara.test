<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PostController;

Route::get('/',[PostController::class , 'index'])->name('posts.index');
