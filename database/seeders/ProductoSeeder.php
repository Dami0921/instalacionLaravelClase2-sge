<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Proveedor;

class ProductoSeeder extends Seeder
{
    public function run(): void
    {
        $semillas = Categoria::where('nombre', 'Semillas')->first();
        $fertilizantes = Categoria::where('nombre', 'Fertilizantes')->first();
        $agroquimicos = Categoria::where('nombre', 'Agroquímicos')->first();
        $herramientas = Categoria::where('nombre', 'Herramientas')->first();
        $riego = Categoria::where('nombre', 'Riego')->first();

        $prov1 = Proveedor::first();
        $prov2 = Proveedor::skip(1)->first();

        Producto::create(['nombre' => 'Semilla de maíz híbrido', 'categoria_id' => $semillas->id, 'proveedor_id' => $prov1->id, 'unidad_medida' => 'kg']);
        Producto::create(['nombre' => 'Fertilizante triple 15', 'categoria_id' => $fertilizantes->id, 'proveedor_id' => $prov2->id, 'unidad_medida' => 'bulto']);
        Producto::create(['nombre' => 'Insecticida sistémico', 'categoria_id' => $agroquimicos->id, 'proveedor_id' => $prov1->id, 'unidad_medida' => 'litro']);
        Producto::create(['nombre' => 'Machete forjado 18"', 'categoria_id' => $herramientas->id, 'proveedor_id' => $prov2->id, 'unidad_medida' => 'unidad']);
        Producto::create(['nombre' => 'Manguera de riego 25m', 'categoria_id' => $riego->id, 'proveedor_id' => $prov1->id, 'unidad_medida' => 'unidad']);
    }
}
