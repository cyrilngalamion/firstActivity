<?php

use App\Http\Controllers\PersonController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('personList');
});

// Route::get('/persons', [PersonController::class, 'index']);

Route::get('/persons', [PersonController::class, 'index']);
Route::post('/persons', [PersonController::class, 'store'])->name('person.store');