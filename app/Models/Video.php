<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'youtube_link'
    ];

    public function getYouTubeEmbedUrl()
    {
        $url = $this->youtube_link;

        if (preg_match('/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/i', $url, $matches)) {
            $videoId = $matches[1];
            return 'https://www.youtube.com/embed/' . $videoId . '?autoplay=1&loop=1&playlist=' . $videoId . '&mute=1';
        }

        return null;
    }
}
