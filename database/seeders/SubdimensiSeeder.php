<?php

namespace Database\Seeders;

use App\Models\Subdimensi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubdimensiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subdimensi::factory()->create([
            'dimensi' => 'Governance',
            'sub' => 'E-Menanduk',
            'deskripsi' => 'Layanan Publik, Transparansi, Keamanan, Ketertiban Umum',
            'gambar' => 'img/logo-biru/blue-s-governance.png',
        ]);

        Subdimensi::factory()->create([
            'dimensi' => 'Governance',
            'sub' => 'Mall Pelayanan Publik Graha Tiyasa',
            'deskripsi' => 'Layanan Publik, Transparansi, Keamanan, Ketertiban Umum',
            'gambar' => 'img/logo-biru/blue-s-governance.png',
        ]);

        Subdimensi::factory()->create([
            'dimensi' => 'Branding',
            'sub' => '100% Bogor Pisan',
            'deskripsi' => 'Penataan Wajah Kota dan Pemasaran Potensi Daerah Secara Lokal, Nasional, dan Global',
            'gambar' => 'img/logo-biru/blue-s-branding.png',
        ]);

        Subdimensi::factory()->create([
            'dimensi' => 'Branding',
            'sub' => 'Bogor Berlari',
            'deskripsi' => 'Penataan Wajah Kota dan Pemasaran Potensi Daerah Secara Lokal, Nasional, dan Global',
            'gambar' => 'img/logo-biru/blue-s-branding.png',
        ]);

        Subdimensi::factory()->create([
            'dimensi' => 'Economy',
            'sub' => 'Pengembangan (Sistem Layanan Perijinan) SMART',
            'deskripsi' => 'Peluang Usaha, Sumber Daya, Permodalan',
            'gambar' => 'img/logo-biru/blue-s-economy.png',
        ]);

        Subdimensi::factory()->create([
            'dimensi' => 'Economy',
            'sub' => 'Manajemen Inovasi Daerah (IGA)',
            'deskripsi' => 'Peluang Usaha, Sumber Daya, Permodalan',
            'gambar' => 'img/logo-biru/blue-s-economy.png',
        ]);

        Subdimensi::factory()->create([
            'dimensi' => 'Living',
            'sub' => 'Simpus di 26 Puskesmas',
            'deskripsi' => 'Tersedianya Lingkungan Tempat Tinggal yang Layak Tinggal, Nyaman dan Efisien',
            'gambar' => 'img/logo-biru/blue-s-living.png',
        ]);

        Subdimensi::factory()->create([
            'dimensi' => 'Living',
            'sub' => 'e-SIR',
            'deskripsi' => 'Tersedianya Lingkungan Tempat Tinggal yang Layak Tinggal, Nyaman dan Efisien',
            'gambar' => 'img/logo-biru/blue-s-living.png',
        ]);

        Subdimensi::factory()->create([
            'dimensi' => 'Society',
            'sub' => 'Inovasi Keselamatan Publik',
            'deskripsi' => 'Ekosistem Sosio-Teknis Masyarakat yang Humanis, Dinamis, Produktif, Komunikatif, dan Interaktif',
            'gambar' => 'img/logo-biru/blue-s-society.png',
        ]);

        Subdimensi::factory()->create([
            'dimensi' => 'Society',
            'sub' => 'SiBadra',
            'deskripsi' => 'Ekosistem Sosio-Teknis Masyarakat yang Humanis, Dinamis, Produktif, Komunikatif, dan Interaktif',
            'gambar' => 'img/logo-biru/blue-s-society.png',
        ]);

        Subdimensi::factory()->create([
            'dimensi' => 'Environment',
            'sub' => 'Bogor Tanpa Plastik (BOTAK)',
            'deskripsi' => 'Pengendalian Polusi, Pengelolahan Limbah, Pelestarian Alam',
            'gambar' => 'img/logo-biru/blue-s-environment.png',
        ]);

        Subdimensi::factory()->create([
            'dimensi' => 'Environment',
            'sub' => 'E-ABCD Urban Agricultre',
            'deskripsi' => 'Pengendalian Polusi, Pengelolahan Limbah, Pelestarian Alam',
            'gambar' => 'img/logo-biru/blue-s-environment.png',
        ]);
    }
}
