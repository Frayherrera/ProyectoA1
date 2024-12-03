<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;

    protected $fillable = ['cliente_id', 'marca', 'modelo', 'color', 'placa', 'fecha_ingreso'];

    public function cliente()
    {

        return $this->belongsTo(Cliente::class);
    }


    public function servicios()
    {
        return $this->belongsToMany(Servicio::class, 'servicio_vehiculos')
            ->withPivot('estado')
            ->withTimestamps();
    }
}
