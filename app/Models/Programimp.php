<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programimp extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'gambar',
        'status'
    ];
}
