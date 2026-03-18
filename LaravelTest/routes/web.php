<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ParticipantController;


Route::post('/Participant', [ParticipantController::class, 'store']);

Route::get('/', [PageController::class, 'index'])->name('welcome');


Route::get('/user', function () {
    return view('user');
})->name('user');


Route::get('/login', function () {
    return view('login');
})->name('login');


Route::get('/navbar', function () {
    return view('navbar');
})->name('navbar');


Route::get('/participants', function () {
    return view('participants');
})->name('participants');

Route::get('/participants', function () {
    return view('participants');
})->name('participants');

Route::get('/edit_participant', function () {
    return view('edit_participant');
})->name('edit_participant');

Route::get('/participants',action: [PageController::class, 'index'])->name('participants');

Route::get('/login',action: [PageController::class, 'index'])->name('login');
 
Route::get('/admin',action: [PageController::class, 'admin'])->name('admin');
Route::get('/participants',action: [PageController::class, 'participants']);


Route::get('/welcome', [ParticipantController::class, 'index']);
Route::post('/participant', [ParticipantController::class, 'store']);


Route::get('/participants', [ParticipantController::class, 'index'])->name('participants');

Route::get('/participants/create', [ParticipantController::class, 'create'])->name('participants.create');

Route::post('/participants', [ParticipantController::class, 'store'])->name('participants.store');


Route::get('/participants/{id}/edit', [ParticipantController::class, 'edit'])->name('participants.edit');
Route::put('/participants/{id}/edit', [ParticipantController::class, 'update'])->name('participants.update');
Route::delete('/participants/{id}/edit', [ParticipantController::class, 'destroy'])->name('participants.destroy');