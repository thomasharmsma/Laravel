<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
<<<<<<< HEAD
use App\Http\Controllers\ParticipantController;










=======
>>>>>>> 66e262b42f1d59ab702b64a3fbf74c4a22e3ed8e

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



<<<<<<< HEAD

Route::get('/beheer', [PageController::class, 'index']);
Route::get('/beheer', [PageController::class, 'admin']);
Route::get('/deelnemers', [PageController::class, 'participants']);
=======
Route::get('/',action: [Pagecontroller::class, 'index']);
Route::get('/admin',action: [Pagecontroller::class, 'admin']);
Route::get('/participants',action: [Pagecontroller::class, 'participants']);
>>>>>>> 66e262b42f1d59ab702b64a3fbf74c4a22e3ed8e




Route::get('/participants/create', [ParticipantController::class, 'create']);
Route::post('/participants/store', [StudentController::class, 'store']);

Route::post('/Participant', [ParticipantController::class, 'store']);



