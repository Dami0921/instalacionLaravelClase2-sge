<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lote extends Model
{
    protected $table = 'lotes';

    protected $fillable = [
        'producto_id', 'numero_lote', 'fecha_ingreso',
        'fecha_vencimiento', 'cantidad_inicial', 'cantidad_actual', 'costo_unitario'
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
}
