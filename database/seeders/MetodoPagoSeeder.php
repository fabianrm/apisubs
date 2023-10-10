<?php

namespace Database\Seeders;

use App\Models\MetodoPago;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MetodoPagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 5) as $index) {
            MetodoPago::create([
                'descripcion' => $faker->word,
                'tipo' => $faker->randomElement(['Tarjeta de crédito', 'PayPal', 'Transferencia bancaria']),
                'estado' => $faker->boolean(90), // Probabilidad alta de estado activo
            ]);
        }
    }
}
