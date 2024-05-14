<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

use Faker\Generator as Faker;

class TrainTableSeederFaker extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i=0; $i<100; $i++){
            $new_train = new Train();

            $new_train->company = $faker->words(1, true) ;
            $new_train->depart_station = $faker->words(2, true) ;
            $new_train->arrival_station = $faker->words(2, true);
            $new_train->depart_time = $faker->time() ;
            $new_train->arrival_time =$faker->time() ;
            $new_train->train_id = $faker->locale();
            $new_train->on_time = $faker->boolean() ;
            $new_train->deleted = $faker->boolean() ;

            $new_train->save(); //salvo nel db
        }
    }
}
