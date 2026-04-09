<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\MatchController;




Route::get('/', [PageController::class, 'index'])->name('welcome'); 

Route::get('/admin', [ParticipantController::class, 'index'])->name('admin');

Route::get('/participants', [ParticipantController::class, 'index'])->name('participants');  
Route::post('/Participant', [ParticipantController::class, 'store']);
Route::get('/participants/create', [ParticipantController::class, 'create'])->name('participants.create');


Route::get('/participants/{id}/edit', [ParticipantController::class, 'edit'])->name('participants.edit');
Route::put('/participants/{id}', [ParticipantController::class, 'update'])->name('participants.update');
Route::delete('/participants/{id}', [ParticipantController::class, 'destroy'])->name('participants.destroy');





Route::get('/wedstrijden', [MatchController::class, 'index'])->name('wedstrijden');  
Route::post('/wedstrijden', [MatchController::class, 'store']);
Route::get('/wedstrijden/create',[MatchController::class, 'create'])->name('wedstrijden.create');

Route::get('/wedstrijden/{id}/edit',[MatchController::class, 'edit'])->name('wedstrijden.edit');
Route::put('/wedstrijden/{id}', [MatchController::class, 'update'])->name('wedstrijden.update');
Route::delete('/wedstrijden/{id}', [MatchController::class, 'destroy'])->name('wedstrijden.destroy');
