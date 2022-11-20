<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutoController;
use App\Http\Controllers\BalesetController;
use App\Http\Controllers\TulajController;
use App\Http\Controllers\Welcome;


Route::get('/auto',[AutoController::class,"index"]);
Route::post('/auto-save',[AutoController::class,"store"]);

Route::get('/ajaj',[BalesetController::class,"index"]);
Route::post('/ajaj',[BalesetController::class,"store"]);

Route::get('/tulaj',[TulajController::class,"index"]);
Route::post('/tulaj',[TulajController::class,"store"]);

Route::get('/',[Welcome::class,"index"]);
