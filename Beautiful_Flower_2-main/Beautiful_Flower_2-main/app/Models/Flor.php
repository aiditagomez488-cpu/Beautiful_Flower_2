<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Flor extends Model
{
    protected $table = 'flores';

    protected $fillable = [
        'nombre',
        'color',
        'temporada',
        'descripcion',
        'imagen',
    ];

    protected function imagenUrl(): Attribute
    {
        return Attribute::make(
            get: function () {
                if ($this->imagen && Storage::disk('public')->exists($this->imagen)) {
                    return asset('storage/' . $this->imagen);
                }

                // Respaldo suave si no se subió foto
                return 'https://images.unsplash.com/photo-1490750967868-88aa4486c946?auto=format&fit=crop&w=800&q=80';
            }
        );
    }
}