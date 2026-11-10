<?php

use App\Http\Controllers\FlorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $flores = [
        (object) ['id' => 1, 'nombre' => 'Rosa', 'color' => 'Rojo', 'temporada' => 'Primavera'],
        (object) ['id' => 2, 'nombre' => 'Girasol', 'color' => 'Amarillo', 'temporada' => 'Verano'],
        (object) ['id' => 3, 'nombre' => 'Crisantemo', 'color' => 'Blanco', 'temporada' => 'Otoño'],
    ];

    return view('flores.index', ['flores' => $flores]);
});