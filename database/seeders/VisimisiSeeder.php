<?php

namespace Database\Seeders;

use App\Models\Visidanmisi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VisimisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Visidanmisi::factory()->create([
            'visi' => 'Terwujudnya Kota Bogor Sebagai Kota Ramah Keluarga',
            'misi' => '<ul><li>Mewujudkan Kota yang Sehat</li><li>Mewujudkan Kota yang Cerdas</li><li>Mewujudkan Kota yang Sejahtera</li></ul>'
        ]);
    }
}
