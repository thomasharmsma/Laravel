<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ParticipantController;

Route::get('/', [PageController::class, 'index'])->name('welcome');

Route::get('/user', function () {
    return view('user');
})->name('user');

Route::get('/test', function () {
    return view('test');
})->name('test');

Route::get('/navbar', function () {
    return view('navbar');
})->name('navbar');

Route::get('/welcome',action: [PageController::class, 'index']);
Route::get('/admin',action: [PageController::class, 'admin'])->name('admin');
Route::get('/participants',action: [PageController::class, 'participants']);

Route::get('/participants/create', [ParticipantController::class, 'create']);
Route::get('/welcome', [ParticipantController::class, 'index']);
Route::post('/participant', [ParticipantController::class, 'store']);
