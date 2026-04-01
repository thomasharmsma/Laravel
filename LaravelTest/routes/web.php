<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ParticipantController;

Route::get('/wedstrijden', function () {
    return view('wedstrijden/wedstrijden');
})->name('wedstrijden');



Route::get('/', [PageController::class, 'index'])->name('welcome'); 

Route::get('/admin', [ParticipantController::class, 'index'])->name('admin');

Route::get('/participants', [ParticipantController::class, 'index'])->name('participants');  
Route::post('/Participant', [ParticipantController::class, 'store']);
Route::get('/participants/create', [ParticipantController::class, 'create'])->name('participants.create');


Route::get('/participants/{id}/edit', [ParticipantController::class, 'edit'])->name('participants.edit');
Route::put('/participants/{id}', [ParticipantController::class, 'update'])->name('participants.update');
Route::delete('/participants/{id}', [ParticipantController::class, 'destroy'])->name('participants.destroy');





Route::get('/wedstrijden', [ParticipantController::class, 'index'])->name('wedstrijden');  
Route::post('/wedstrijden', [ParticipantController::class, 'store']);
Route::get('/wedstrijden/create', [ParticipantController::class, 'create'])->name('wedstrijden.create');

Route::get('/wedstrijden/{id}/edit', [ParticipantController::class, 'edit'])->name('wedstrijden.edit');
Route::put('/wedstrijden/{id}', [ParticipantController::class, 'update'])->name('wedstrijden.update');
Route::delete('/wedstrijden/{id}', [ParticipantController::class, 'destroy'])->name('wedstrijden.destroy');
