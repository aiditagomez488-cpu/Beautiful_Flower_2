<?php

use App\Http\Controllers\FlorController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FlorController::class, 'index']);

Route::resource('flores', FlorController::class)
    ->parameters(['flores' => 'flor']);