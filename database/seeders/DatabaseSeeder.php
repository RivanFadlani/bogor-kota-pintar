<?php

namespace Database\Seeders;

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

        $this->call([
            BookletSeeder::class,
            DimensiSeeder::class,
            KategoriSeeder::class,
            SubdimensiSeeder::class,
            VideoSeeder::class,
            VisimisiSeeder::class,
            DokumenSeeder::class
            // Tambahkan seeder lain jika diperlukan
        ]);

        User::factory()->create([
            'name' => 'Admin Pintar',
            'email' => 'adminpintar@gmail.com',
            'usertype' => 'admin',
            'password' => bcrypt('12345678'),
        ]);
    }
}
