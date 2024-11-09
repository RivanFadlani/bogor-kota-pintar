<?php

namespace Database\Seeders;

use App\Models\Booklet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Booklet::factory()->create([
            'judul' => 'Booklet Smart City 2023',
            'gambar' => 'public/img/booklet2',
            'url' => 'https://online.fliphtml5.com/dovji/fvbl/'
        ]);

        Booklet::factory()->create([
            'judul' => 'Booklet Smart City 2024',
            'gambar' => '/img/booklet1',
            'url' => 'https://online.fliphtml5.com/dovji/nzfi/'
        ]);

        Booklet::factory()->create([
            'judul' => 'Booklet Smart City 2023',
            'gambar' => '/img/booklet2',
            'url' => 'https://online.fliphtml5.com/dovji/fvbl/'
        ]);

        Booklet::factory()->create([
            'judul' => 'Booklet Smart City 2024',
            'gambar' => '/img/booklet1',
            'url' => 'https://online.fliphtml5.com/dovji/nzfi/'
        ]);

        Booklet::factory()->create([
            'judul' => 'Booklet Smart City 2023',
            'gambar' => '/img/booklet2',
            'url' => 'https://online.fliphtml5.com/dovji/fvbl/'
        ]);

        Booklet::factory()->create([
            'judul' => 'Booklet Smart City 2024',
            'gambar' => '/img/booklet1',
            'url' => 'https://online.fliphtml5.com/dovji/nzfi/'
        ]);
    }
}
