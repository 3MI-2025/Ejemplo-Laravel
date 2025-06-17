<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BebidaController;

Route::get('/',[BebidaController::class, "Index"] );
Route::post('/bebida', [BebidaController::class, "Insertar"]);