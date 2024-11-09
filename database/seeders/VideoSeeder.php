<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Video::factory()->create([
            'judul' => 'Bogor Smart City',
            'youtube_link' => 'https://youtu.be/iSU-mzNYbQ4?si=gaA0d577nummmIeP'
        ]);
    }
}
