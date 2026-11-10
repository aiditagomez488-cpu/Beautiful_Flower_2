<?php

namespace Database\Seeders;

use App\Models\Flor;
use Illuminate\Database\Seeder;

class FlorSeeder extends Seeder
{
    public function run(): void
    {
        if (Flor::count() > 0) {
            return;
        }

        Flor::create(['nombre' => 'Rosa', 'color' => 'Rojo', 'temporada' => 'Primavera']);
        Flor::create(['nombre' => 'Girasol', 'color' => 'Amarillo', 'temporada' => 'Verano']);
        Flor::create(['nombre' => 'Crisantemo', 'color' => 'Blanco', 'temporada' => 'Otoño']);
    }
}