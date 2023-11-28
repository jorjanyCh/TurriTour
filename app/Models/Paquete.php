<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
    protected $fillable = ['nombre', 'precio', 'descripcion'];

    public function imagenes()
    {
        return $this->hasMany(Imagen::class);
    }
}
