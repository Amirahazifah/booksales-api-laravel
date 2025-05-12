<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GenreModel extends Model
{
    private $genres = [
        [
            'id' => 1, 
            'name' => 'Fiksi', 
            'description' => 'Cerita rekaan yang mengandung unsur imajinatif, tidak sepenuhnya berdasarkan fakta.'
        ],
        [
            'id' => 2, 
            'name' => 'Biografi', 
            'description' => 'Kisah nyata tentang kehidupan seseorang yang ditulis secara naratif.'
        ],
        [
            'id' => 3, 
            'name' => 'Puisi', 
            'description' => 'Karya sastra dengan gaya bahasa yang indah dan penuh makna emosional.'
        ],
        [
            'id' => 4, 
            'name' => 'Sejarah', 
            'description' => 'Buku yang membahas kejadian-kejadian penting di masa lalu.'
        ],
        [
            'id' => 5, 
            'name' => 'Sains', 
            'description' => 'Genre yang berisi teori, eksperimen, dan pengetahuan ilmiah.'
        ],
        [
            'id' => 6, 
            'name' => 'Romansa', 
            'description' => 'Cerita yang berfokus pada hubungan cinta antar tokoh.'
        ]
    ];

    public function getGenres()
    {
        return $this->genres;
    }
}
