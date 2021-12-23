<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdressController;

Route::get('/', function () {
    return view('welcome');
});

Route::redirect('/', '/home');

Route::get('/home', [AdressController::class, 'index'])->name('home');

Route::get('/search', [AdressController::class, 'searchAction'])->name('search');
