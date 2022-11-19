<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutoController;
use App\Http\Controllers\BalesetController;
use App\Http\Controllers\TulajController;


Route::get('/',[AutoController::class,"index"]);

Route::get('/ajaj',[BalesetController::class,"index"]);

Route::get('/tulaj',[TulajController::class,"index"]);

