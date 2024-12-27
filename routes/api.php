<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QytetetController;
use App\Http\Controllers\QytetaretController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/qytetet', [QytetetController::class,'index']);
Route::get('/qytetet/{id}', [QytetetController::class,'show']);
Route::middleware(['validate.req'])->group(function () {
    Route::post('/qytetet', [QytetetController::class, 'store']);
    Route::put('/qytetet/{id}', [QytetetController::class, 'update']);
    Route::delete('/qytetet/{id}', [QytetetController::class, 'delete']);
});
Route::get('/qytetaret', [QytetaretController::class,'index']);
Route::get('/qytetaret/{id}', [QytetaretController::class,'show']);
Route::post('qytetaret', [QytetaretController::class, 'store']);
Route::put('qytetaret/{id}', [QytetaretController::class, 'update']);
Route::delete('/qytetaret/{id}', [QytetaretController::class,'delete']);