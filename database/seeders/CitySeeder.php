<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $city0 = new City();
        $city0->name = "Santiago";
        $city0->country_id = 1;
        $city0->save();

        $city1 = new City();
        $city1->name = "Chihuahua";
        $city1->country_id = 2;
        $city1->save();
    }
}
