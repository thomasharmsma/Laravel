<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ParticipantController;




Route::get('/', [PageController::class, 'index'])->name('welcome');

Route::get('/admin', [ParticipantController::class, 'index'])->name('admin');

Route::get('/participants', [ParticipantController::class, 'index'])->name('participants');  
Route::post('/Participant', [ParticipantController::class, 'store']);
Route::get('/participants/create', [ParticipantController::class, 'create'])->name('participants.create');


Route::get('/participants/{id}/edit', [ParticipantController::class, 'edit'])->name('participants.edit');
Route::put('/participants/{id}', [ParticipantController::class, 'update'])->name('participants.update');
Route::delete('/participants/{id}', [ParticipantController::class, 'destroy'])->name('participants.destroy');

