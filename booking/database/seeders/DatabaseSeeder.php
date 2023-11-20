<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {    $this->call([
        StaySeeder::class

    ]);
        // \App\Models\User::factory(10)->create();
    }
}
