<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quickwin extends Model
{
    use HasFactory;

    protected $table = 'quickwins';
    protected $fillable = [
        'gambar',
        'judul',
        'deskripsi',
        'tahun'
    ];
}
