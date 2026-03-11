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

Route::get('/',action: [Pagecontroller::class, 'index']);
Route::get('/admin',action: [Pagecontroller::class, 'admin']);
Route::get('/participants',action: [Pagecontroller::class, 'participants']);




Route::get('/participants/create', [ParticipantController::class, 'create']);
Route::post('/participants/store', [StudentController::class, 'store']);





