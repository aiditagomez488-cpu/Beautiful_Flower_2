<?php

use App\Http\Controllers\FlorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('flores.index');
});