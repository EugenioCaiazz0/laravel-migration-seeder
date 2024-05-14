<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{

    public function run(): void
    {
          //istruzioni per popolare la tabella
    $data = [
        [
            "company" => 'Trenitalia',
            "depart_station" => 'Roma Termini',
            "arrival_station" => 'Napoli Garibaldi',
            "depart_time" => '12:00',
            "arrival_time" => '14:40',
            "train_id" => '44hh8dsg',
            "on_time" => '1',
            "deleted" => '0',
        ]
    ];

    foreach($data as $item){ //creazione di una tabella da inserire nel db

        $new_train = new Train();

        $new_train->company = $item['company'] ;
        $new_train->depart_station = $item['depart_station'] ;
        $new_train->arrival_station = $item['arrival_station'];
        $new_train->depart_time = $item['depart_time'] ;
        $new_train->arrival_time = $item['arrival_time'] ;
        $new_train->train_id = $item['train_id'];
        $new_train->on_time = $item['on_time'] ;
        $new_train->deleted = $item['deleted'] ;

        $new_train->save(); //salvo nel db
    }

    }
}
