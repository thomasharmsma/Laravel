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


use App\Http\Controllers\ParticipentController;

Route::get('/participents', [ParticipentController::class, 'index'])->name('participents.index');
Route::post('/participents', [ParticipentController::class, 'store'])->name('participents.store');


use App\Http\Controllers\PersonController;
Route::get('/people', [PersonController::class, 'index']);

