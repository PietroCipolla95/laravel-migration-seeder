<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 25; $i++) {

            $train = new Train();
            $train->company =  $faker->word();
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_time = $faker->dateTimeBetween('now', '+1 day');
            $train->arrival_time = $faker->dateTimeBetween('now', '+1 week');
            $train->train_code = $faker->bothify('???-###');
            $train->carriage_number = $faker->numberBetween(2, 15);
            $train->in_time = $faker->boolean();
            $train->deleted = $faker->boolean();

            $train->save();
        }
    }
}
