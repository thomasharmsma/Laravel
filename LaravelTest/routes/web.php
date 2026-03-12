<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ParticipantController;











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




Route::get('/beheer', [PageController::class, 'index']);
Route::get('/beheer', [PageController::class, 'admin']);
Route::get('/deelnemers', [PageController::class, 'participants']);




Route::get('/participants/create', [ParticipantController::class, 'create']);
Route::post('/participants/store', [StudentController::class, 'store']);

Route::post('/Participant', [ParticipantController::class, 'store']);



