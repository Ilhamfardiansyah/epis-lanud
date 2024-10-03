<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Posting;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Posting::factory(40)->create();
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
    }
}
