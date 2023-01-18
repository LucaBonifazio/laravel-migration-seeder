<?php

use App\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 250; $i++) {
            $train = new Train();
            $train->company = $faker->company;
            $train->departure_station = $faker->city;
            $train->arrival_station = $faker->city;
            $train->departure_time = $faker->date('Y-m-d');
            $train->arrival_time = $faker->date('Y-m-d');
            $train->code = $faker->swiftBicNumber;
            $train->n_carriages = $faker->randomDigitNotNull;
            $train->on_time = $faker->boolean;
            $train->deleted = $faker->company ;
            $train->save();
        }
    }

     // public function run()
    // {
    //     for ($i=0; $i < 250; $i++) {
    //         $train = new Train();
    //         $train->agency = 'Trenitalia';
    //         $train->departure_station = 'Torino';
    //         $train->arrival_station = 'Roma';
    //         $train->departure_time = '2023-01-13';
    //         $train->arrival_time = '2023-01-13';
    //         $train->code = '46dh54fg6';
    //         $train->n_carriages = '126';
    //         $train->on_time = true;
    //         $train->deleted = 'Milano-Bologna' ;
    //         $train->save();
    //     }
    // }
}
