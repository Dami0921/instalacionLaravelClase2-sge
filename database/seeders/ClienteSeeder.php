<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClienteSeeder extends Seeder
{
    public function run(): void
    {
        Cliente::create(['nombre' => 'Juan Pérez', 'tipo_cliente' => 'Agricultor independiente', 'documento' => '1045678901', 'telefono' => '3201234567', 'municipio' => 'Cartago']);
        Cliente::create(['nombre' => 'Finca La Esperanza', 'tipo_cliente' => 'Finca', 'documento' => '900111222-3', 'telefono' => '3212345678', 'municipio' => 'Anserma']);
        Cliente::create(['nombre' => 'Cooperativa AgroValle', 'tipo_cliente' => 'Cooperativa', 'documento' => '900222333-4', 'telefono' => '3223456789', 'municipio' => 'Zarzal']);
        Cliente::create(['nombre' => 'María González', 'tipo_cliente' => 'Agricultor independiente', 'documento' => '1067890123', 'telefono' => '3234567890', 'municipio' => 'Ulloa']);
        Cliente::create(['nombre' => 'Finca San Isidro', 'tipo_cliente' => 'Finca', 'documento' => '900333444-5', 'telefono' => '3245678901', 'municipio' => 'Alcalá']);
    }
}
