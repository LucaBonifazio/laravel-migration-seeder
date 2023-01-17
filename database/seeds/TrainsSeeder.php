<?php

use App\Trains;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) {
            $newTrain = new Trains();
            $newTrain->agency = $faker->company;
            $newTrain->departure_station = $faker->city;
            $newTrain->arrival_station = $faker->city;
            $newTrain->departure_time = $faker->date('Y-m-d');
            $newTrain->arrival_time = $faker->date('Y-m-d');
            $newTrain->code = $faker->swiftBicNumber;
            $newTrain->n_carriages = $faker->randomDigitNotNull;
            $newTrain->on_time = $faker->company ;
            $newTrain->deleted = $faker->company ;
            $newTrain->save();
        }
    }
}
