<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ParticipantController;

<<<<<<< HEAD
Route::get('/', function () {
    return view('login');
});

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

=======
Route::get('/', [PageController::class, 'index'])->name('welcome');
>>>>>>> e52e02e2eb0891edea84fec08770382216cd062d

Route::get('/user', function () {
    return view('user');
})->name('user');

<<<<<<< HEAD
=======
Route::get('/test', function () {
    return view('test');
})->name('test');

>>>>>>> e52e02e2eb0891edea84fec08770382216cd062d
Route::get('/navbar', function () {
    return view('navbar');
})->name('navbar');

<<<<<<< HEAD

Route::get('/admin', [PageController::class, 'admin'])->name('admin');



Route::get('/admin', [PageController::class, 'admin'])->name('admin');
=======
Route::get('/welcome',action: [PageController::class, 'index']);
Route::get('/admin',action: [PageController::class, 'admin'])->name('admin');
Route::get('/participants',action: [PageController::class, 'participants']);
>>>>>>> e52e02e2eb0891edea84fec08770382216cd062d

Route::get('/admin', [Pagecontroller::class, 'admin']);
Route::get('/participants', [Pagecontroller::class, 'participants']);
Route::get('/participants/create', [ParticipantController::class, 'create']);
<<<<<<< HEAD
Route::post('/Participant', [ParticipantController::class, 'store']);
=======
Route::get('/welcome', [ParticipantController::class, 'index']);
Route::post('/participant', [ParticipantController::class, 'store']);



>>>>>>> e52e02e2eb0891edea84fec08770382216cd062d
