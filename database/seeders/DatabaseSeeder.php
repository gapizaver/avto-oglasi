<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // create users
        \App\Models\User::factory(50)->create();
        // create ads with each having a random publisher (user)
        \App\Models\Ad::factory(50)->create();
    }
}
