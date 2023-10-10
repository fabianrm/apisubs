<?php

namespace Database\Seeders;

use App\Models\Suscriptor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SuscriptorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
            Suscriptor::create([
                'dni' => $faker->unique()->numberBetween(10000000, 99999999),
                'nombre' => $faker->firstName,
                'apellidos' => $faker->lastName,
                'direccion' => $faker->address,
                'ciudad' => $faker->city,
                'telefono' => $faker->phoneNumber,
                'email' => $faker->unique()->email,
            ]);
        }
    }
}
