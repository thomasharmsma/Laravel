<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD


=======
>>>>>>> 9d51093e14bf3d79f5f8fc1ba74da40386c7c163
Route::get('/user', function () {
    return view('user');
})->name('user');

Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::get('/test', function () {
    return view('test');
})->name('test');


Route::get('/partials', function () {
    return view('partials.navbar');
})->name('partials.navbar');