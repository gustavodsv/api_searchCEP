<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdressController;

Route::redirect('/', '/home');

Route::get('/home', [AdressController::class, 'index'])->name('home');

Route::get('/search', [AdressController::class, 'searchAction'])->name('search');

Route::post('/save', [AdressController::class, 'saveAction'])->name('save');


