<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'first_name'        => 'Test',
            'last_name'         => 'User',
            'email'             => 'test@example.com',
            'password'          => bcrypt('password'), // Or 'password' if using 'hashed' cast
            'instagram_account' => '@test_user',
            'address'           => '123 Laravel St.',
            'role'              => 'admin',
        ]);

        $this->call([
            CategorySeeder::class,
            ProductSeeder::class,
            ProductImageSeeder::class,
            OrderSeeder::class,
            OrderItemSeeder::class,
            CartItemSeeder::class,
            CartSeeder::class,
        ]);
    }
}
