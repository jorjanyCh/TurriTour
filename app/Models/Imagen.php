<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    protected $table = 'imagenes';
    protected $fillable = ['paquete_id', 'imagen_url'];
    public $timestamps = false;

    public function paquete()
    {
        return $this->belongsTo(Paquete::class);
    }
}
