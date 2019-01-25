<?php

use Illuminate\Database\Seeder;

class SchedulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Schedules::create([
        	"name"=>"Sriwijaya Air",
        	"description"=>"Yoyoy",
        	"type"=>"Regular",
            "capacity"=>"1",
            "from"=>"Semarang",
            "to"=>"Jakarta",
            "start_at"=>"19.00",
            "end_at"=>"20.00"
        ]);
    }
}
