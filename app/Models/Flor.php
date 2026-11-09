<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flor extends Model
{
    protected $fillable = ['nombre', 'color', 'temporada', 'descripcion'];
}