<?php

use App\Http\Controllers\FlorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $flores = [
        (object) ['id' => 1, 'nombre' => 'Rosa', 'temporada' => 'Primavera'],
        (object) ['id' => 2, 'nombre' => 'Girasol', 'temporada' => 'Verano'],
        (object) ['id' => 3, 'nombre' => 'Crisantemo', 'temporada' => 'Otoño'],
    ];

    return view('flores.index', ['flores' => $flores]);
});