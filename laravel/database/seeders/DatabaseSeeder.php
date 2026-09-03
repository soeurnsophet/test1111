<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Profiles;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Symfony\Component\HttpKernel\Profiler\Profile;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::firstOrCreate([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        //     'password' => bcrypt('password')
        // ]);

        // Profiles::firstOrCreate([
        //     'user_id' => 1,
        //     'phone' => '123-456-7890',
        //     'address' => '123 Main St, Anytown, USA'
        // ]);

        // Product::factory(20)->create();

       
    }
}
