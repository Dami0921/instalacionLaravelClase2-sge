<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Proveedor;

class ProveedorSeeder extends Seeder
{
    public function run(): void
    {
        Proveedor::create(['nombre' => 'Agroinsumos del Valle', 'nit' => '900123456-1', 'telefono' => '3101234567', 'direccion' => 'Cra 5 #10-20, Cartago']);
        Proveedor::create(['nombre' => 'Semillas del Cauca', 'nit' => '900234567-2', 'telefono' => '3112345678', 'direccion' => 'Vía Popayán km 3']);
        Proveedor::create(['nombre' => 'Fertilizantes Andinos', 'nit' => '900345678-3', 'telefono' => '3123456789', 'direccion' => 'Zona Industrial, Cali']);
        Proveedor::create(['nombre' => 'Riegos y Equipos S.A.S.', 'nit' => '900456789-4', 'telefono' => '3134567890', 'direccion' => 'Calle 45 #12-30, Pereira']);
        Proveedor::create(['nombre' => 'AgroQuímica Nacional', 'nit' => '900567890-5', 'telefono' => '3145678901', 'direccion' => 'Autopista Sur km 8']);
    }
}
