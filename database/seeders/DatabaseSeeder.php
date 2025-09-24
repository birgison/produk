<?php

namespace Database\Seeders;

use App\Models\product;
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
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // $this->call([
        //     SiswasTableSeeder::class,
        //     PostTableSeeder::class,
        //     BiodataTableSeeder::class,
        // ]);

        product::create([
            'name' => "basreng",
            'description' => "basreng enak dan gurih",
            'price' => 300,
            'stock' => 5000,
        ]);
    }
}
