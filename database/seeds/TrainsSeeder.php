<?php

use App\Trains;
use Illuminate\Database\Seeder;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [

        ];

        foreach ($trains as $train) {
            $newTrain = new Trains();
            $newTrain->agency = $train['Trenitalia'];
            $newTrain->departure_station = $train['Torino'];
            $newTrain->arrival_station = $train['Roma'];
            $newTrain->departure_time = $train['10.50'];
            $newTrain->arrival_time = $train['16.30'];
            $newTrain->code = $train['1adrfg6548dfs'];
            $newTrain->n_carriages = $train['180'];
            $newTrain->on_time = $train['binary 2'];
            $newTrain->deleted = $train['binary 1'];
            $newTrain->save();
        }
    }
}
