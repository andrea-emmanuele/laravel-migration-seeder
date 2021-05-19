<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class TravelSeeder extends Seeder
{
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) {
            DB::table('travels')->insert([
                'packetName' => $faker->words(4, true),
                'destination' => $faker->country,
                'daysToStay' => $faker->numberBetween(2, 14),
                'departureDate' => $faker->dateTimeBetween('-1 week', '+3 week'),
                'price' => $faker->numberBetween(99, 3000)
            ]);
        }
    }
}
