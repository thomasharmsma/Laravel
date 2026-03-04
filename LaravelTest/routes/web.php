<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', [PageController::class, 'about'])->name('about');      
Route::get('/contact', [PageController::class, 'contact'])->name('contact');










