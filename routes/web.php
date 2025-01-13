<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QytetaretController;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get(uri: '/', action: [QytetaretController::class, 'index']);

Route::get(uri: '/qytetaret/{id}', action: [QytetaretController::class, 'show']);