<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;



    protected $fillable = ['nombre','telefono','direccion', 'email'];
        //relacion de uno a muchos cliente puede tener muchos vehiculos 
    public function vehiculos(){
        return $this->hasMany(Vehiculo::class);
    }

    public function servicioVehiculos(){
        return $this->hasMany(ServicioVehiculo::class);
    }

}
