<?php

use App\Http\Controllers\FlorController;
use Illuminate\Support\Facades\Route;

Route::resource('flores', FlorController::class)->parameters(['flores' => 'flor']);