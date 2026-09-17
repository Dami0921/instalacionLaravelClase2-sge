<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lote;
use App\Models\Producto;

class LoteSeeder extends Seeder
{
    public function run(): void
    {
        $productos = Producto::all();

        foreach ($productos as $producto) {
            Lote::create([
                'producto_id' => $producto->id,
                'numero_lote' => 'L-' . str_pad($producto->id, 4, '0', STR_PAD_LEFT),
                'fecha_ingreso' => now()->subDays(10),
                'fecha_vencimiento' => now()->addMonths(6),
                'cantidad_inicial' => 100,
                'cantidad_actual' => 100,
                'costo_unitario' => 15000,
            ]);
        }
    }
}
