<?php

use Illuminate\Database\Seeder;

class PlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Plans::create([
        	"name"=>"Sriwijaya Air",
        	"description"=>"Yoyoy",
        	"price"=>"500.000",
        	"discount"=>"100.000"
        ]);
    }
}
