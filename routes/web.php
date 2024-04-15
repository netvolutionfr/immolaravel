<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnnonceController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/annonces', [AnnonceController::class, 'index']);
