<?php

namespace App\Helpers;

use App\Models\Dokumen;
use App\Models\Resource;

class ClickHelper
{
    public static function trackClick($id)
    {
        // Temukan resource berdasarkan id
        $resource = Dokumen::findOrFail($id);

        // Tambah jumlah klik
        $resource->increment('dilihat');

        // Ambil jumlah klik terbaru
        return $resource->fresh()->dilihat; // Menggunakan fresh() untuk mendapatkan nilai terbaru
    }
}
