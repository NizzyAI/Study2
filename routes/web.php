<?php

use Illuminate\Support\Facades\Route;
use App\Models\Qytetet;
use App\Models\Qytetaret;

Route::get('/', function () {
    return view('welcome');
});