<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');


Route::get('/user', function () {
    return view('user');
})->name('user');

Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::get('/test', function () {
    return view('test');
})->name('test');


Route::get('/navbar', function () {
    return view('navbar');
})->name('navbar');









