<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subdimensi extends Model
{
    use HasFactory;

    protected $fillable = [
        'dimensi',
        'sub',
        'deskripsi',
        'gambar'
    ];
}
