<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'descripcion', 'precio','vehiculo_id'];

    public function vehiculos()
    {
        return $this->belongsToMany(Vehiculo::class, 'servicio_vehiculos')
                    ->withPivot('estado')
                    ->withTimestamps();
    }
    

    
}
