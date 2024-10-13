<?php

namespace Database\Seeders;

use App\Models\events;
use App\Models\invitations;
use App\Models\organisators;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        organisators::factory(10)->create();
        events::factory(10)->create();
        User::factory(10)->create();
        invitations::factory(10)->create();
    }
}
