<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'home']);

Route::get('/movie', [MovieController::class, 'showList']);

Route::get('/movie/{id}', [MovieController::class, 'showMovie']);


//Route::get('/new', 'create')->name('create');
