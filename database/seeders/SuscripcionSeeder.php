<?php

namespace Database\Seeders;

use App\Models\MetodoPago;
use App\Models\Suscripcion;
use App\Models\Suscriptor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SuscripcionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $suscriptores = Suscriptor::all();
        $metodoPagos = MetodoPago::all();

        foreach (range(1, 15) as $index) {
            $fechaSuscripcion = $faker->dateTimeThisYear;
            $fechaVencimiento = $faker->dateTimeInInterval($fechaSuscripcion, '+1 year');
            $estado = $faker->boolean(90); // Probabilidad alta de estado activo

            Suscripcion::create([
                'id_suscriptor' => $faker->randomElement($suscriptores)->id,
                'id_metodo_pago' => $faker->randomElement($metodoPagos)->id,
                'fecha_suscripcion' => $fechaSuscripcion,
                'fecha_vencimiento' => $fechaVencimiento,
                'estado' => $estado,
            ]);
        }
    }
}
