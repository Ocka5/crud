<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $county0 = new Country();
        $county0->name = "Chile";
        $county0->save();

        $county1 = new Country();
        $county1->name = "Mexico";
        $county1->save();
    }
}
