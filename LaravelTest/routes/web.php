<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ParticipantController;

Route::get('/', function () {
    return view('login');
});

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');


Route::get('/user', function () {
    return view('user');
})->name('user');

Route::get('/navbar', function () {
    return view('navbar');
})->name('navbar');


Route::get('/admin', [PageController::class, 'admin'])->name('admin');



Route::get('/admin', [PageController::class, 'admin'])->name('admin');

Route::get('/admin', [Pagecontroller::class, 'admin']);
Route::get('/participants', [Pagecontroller::class, 'participants']);
Route::get('/participants/create', [ParticipantController::class, 'create']);
Route::post('/Participant', [ParticipantController::class, 'store']);
