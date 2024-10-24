<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visidanmisi extends Model
{
    use HasFactory;

    protected $fillable = [
        'visi',
        'misi'
    ];
}
