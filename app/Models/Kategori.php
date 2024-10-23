<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategori extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategori'
    ];

    public function dokumen()
    {
        return $this->hasMany(Dokumen::class, 'kategori_id', 'id');
    }
}
