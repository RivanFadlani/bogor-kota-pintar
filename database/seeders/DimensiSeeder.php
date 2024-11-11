<?php

namespace Database\Seeders;

use App\Models\Dimensi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DimensiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dimensi::factory()->create([
            'judul' => 'Smart Governance',
            'deskripsi' => '<p>Layanan Publik, Transparansi, Keamanan, Ketertiban Umum</p><p><strong>E-Menanduk, Mall Pelayanan Publik Graha Tiyasa</strong></p>',
            'gambar' => 'img/logo-putih/white-business-and-trade.png',
        ]);

        Dimensi::factory()->create([
            'judul' => 'Smart Branding',
            'deskripsi' => '<p>Penataan Wajah Kota dan Pemasaran Potensi Daerah Secara Lokal, Nasional dan Global&nbsp;<strong>100% Bogor Pisan, Bogor Berlari</strong></p>',
            'gambar' => 'img/logo-putih/white-badge.png',
        ]);

        Dimensi::factory()->create([
            'judul' => 'Smart Economy',
            'deskripsi' => '<p>Peluang Usaha, Sumber Daya, Permodalan&nbsp;<strong>Pengembagan (Sistem Layanan Perijinan) SMART, Manajemen Inovasi Daerah (IGA)</strong></p>',
            'gambar' => 'img/logo-putih/s-economy.png',
        ]);

        Dimensi::factory()->create([
            'judul' => 'Smart Living',
            'deskripsi' => '<p>Tersedianya Lingkungan Tempat Tinggal yang Layak Tinggal, Nyaman dan Efisien.&nbsp;<strong>Simpus di 26 Puskesmas, e-SIR</strong></p>',
            'gambar' => 'img/logo-putih/s-living.png',
        ]);

        Dimensi::factory()->create([
            'judul' => 'Smart Society',
            'deskripsi' => '<p>Ekosistem Sosio-Teknis Masyarakat yang Humanis, Dinamis, Produktif, Komunikatif, dan Interaktif&nbsp;<strong>Inovasi Keselamatan Publik, SiBadra</strong></p>',
            'gambar' => 'img/logo-putih/s-society.png',
        ]);

        Dimensi::factory()->create([
            'judul' => 'Smart Environment',
            'deskripsi' => '<p>Pengendalian Polusi, Pengolahan Limbah, Pelestarian Alam&nbsp;<strong>Bogor Tanpa Plastik (BOTAK), E-ABCD Urban Agriculture</strong></p>',
            'gambar' => 'img/logo-putih/s-environment.png',
        ]);
    }
}
