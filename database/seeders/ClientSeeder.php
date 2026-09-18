<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    public function run(): void
    {
        $clients = [
            ['name' => 'Laura Gómez', 'phone' => '3101234567', 'email' => 'laura.gomez@example.com'],
            ['name' => 'Carlos Ramírez', 'phone' => '3112345678', 'email' => 'carlos.ramirez@example.com'],
            ['name' => 'Ana María Torres', 'phone' => '3123456789', 'email' => 'ana.torres@example.com'],
            ['name' => 'Julián Pérez', 'phone' => '3134567890', 'email' => 'julian.perez@example.com'],
            ['name' => 'Sofía Martínez', 'phone' => '3145678901', 'email' => 'sofia.martinez@example.com'],
        ];

        foreach ($clients as $client) {
            Client::create($client);
        }
    }
}
