<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'gambar',
        'url',
        'kategori_id',
        'status'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
