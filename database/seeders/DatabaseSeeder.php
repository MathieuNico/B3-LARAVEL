<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Locataire;
use App\Models\Boxe;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory(1)->create();

        Locataire::factory(10)->create();

        Boxe::factory(10)->create();
    }
}
