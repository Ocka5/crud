<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user0 = new User();
        $user0->name = 'user0';
        $user0->email = 'user0@example.com';
        $user0->city_id = 1;
        $user0->password = bcrypt('12345678');
        $user0->save();

        $user1 = new User();
        $user1->name = 'user1';
        $user1->email = 'user1@example.com';
        $user1->city_id = 2;
        $user1->password = bcrypt('12345678');
        $user1->save();
    }
}
