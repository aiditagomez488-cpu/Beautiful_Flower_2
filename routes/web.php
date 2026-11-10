<?php

use App\Http\Controllers\FlorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $flores = [
        ['nombre' => 'Rosa', 'temporada' => 'Primavera'],
        ['nombre' => 'Girasol', 'temporada' => 'Verano'],
        ['nombre' => 'Crisantemo', 'temporada' => 'Otoño'],
    ];

    return view('flores.index', ['flores' => $flores]);
});