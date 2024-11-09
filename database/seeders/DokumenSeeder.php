<?php

namespace Database\Seeders;

use App\Models\Dokumen;
use App\Models\Kategori;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DokumenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Cari ID dari kategori 'masterplan'
        $kategoriMasterplan = Kategori::where('kategori', 'masterplan')->first();
        $kategoriPowerpoint = Kategori::where('kategori', 'powerpoint')->first();

        // Pastikan kategori ditemukan
        if ($kategoriMasterplan) {
            Dokumen::create([
                'judul' => 'Buku 1 (Satu). Analisis Strategi Smart City Kota Bogor',
                'gambar' => '/img/masterplan1.png',
                'url' => 'https://online.fliphtml5.com/dovji/bjot/',
                'kategori_id' => $kategoriMasterplan->id, // Menggunakan ID integer
            ]);
        } else {
            // Jika kategori 'masterplan' tidak ditemukan, tampilkan pesan error atau buat kategori baru
            echo "Kategori 'masterplan' tidak ditemukan. Pastikan data kategori sudah ada di tabel.";
        }

        if ($kategoriMasterplan) {
            Dokumen::create([
                'judul' => 'Buku 2 (Dua), Rencana Induk Smart City Kota Bogor',
                'gambar' => '/img/masterplan2.png',
                'url' => 'https://online.fliphtml5.com/dovji/gnpd/',
                'kategori_id' => $kategoriMasterplan->id, // Menggunakan ID integer
            ]);
        } else {
            // Jika kategori 'masterplan' tidak ditemukan, tampilkan pesan error atau buat kategori baru
            echo "Kategori 'masterplan' tidak ditemukan. Pastikan data kategori sudah ada di tabel.";
        }

        if ($kategoriPowerpoint) {
            Dokumen::create([
                'judul' => 'Smart City 2021',
                'gambar' => '/img/ppt1.png',
                'url' => 'https://online.fliphtml5.com/dovji/kqun/',
                'kategori_id' => $kategoriPowerpoint->id, // Menggunakan ID integer
            ]);
        } else {
            // Jika kategori 'masterplan' tidak ditemukan, tampilkan pesan error atau buat kategori baru
            echo "Kategori 'powerpoint' tidak ditemukan. Pastikan data kategori sudah ada di tabel.";
        }
    }
}
