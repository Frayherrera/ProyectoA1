<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;

    // Tabla asociada al modelo
    protected $table = 'inventarios';

    // Campos permitidos para asignación masiva
    protected $fillable = [
        'nombre_producto',
        'descripcion',
        'cantidad',
        'precio',
    ];

    /**
     * Relación: Si el producto pertenece a otra tabla, puedes añadir aquí relaciones.
     * Por ejemplo, si hay una categoría o proveedor relacionado con los productos:
     * 
     * public function categoria()
     * {
     *     return $this->belongsTo(Categoria::class);
     * }
     */
}
