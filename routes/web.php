<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QytetaretController;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get(uri: '/', action: [QytetaretController::class, 'index']);

Route::get(uri: '/qytetaret/{id}', action: [QytetaretController::class, 'show']);

Route::get(uri: '/qytetaret/{id}/edit', action: [QytetaretController::class, 'edit'])->name(name: 'qytetaret.edit');

Route::put(uri: '/qytetaret/{id}', action: [QytetaretController::class, 'update']);

Route::get('/qytetaret', [QytetaretController::class, 'index'])->name('qytetaret.index');
