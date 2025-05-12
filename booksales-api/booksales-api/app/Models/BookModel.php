<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookModel extends Model
{
    private $books = [
        [
            'title' => 'Pulang',
            'description' => 'Petualangan seorang pemuda yang kembali ke desa kelahirannya',
            'price' => 40000,
            'stock' => 15,
            'cover_photo' => 'pulang.jpg',
            'genre_id' => 1,
            'author_id' => 1
        ],
        [
            'title' => 'Hujan',
            'description' => 'Kisah cinta dan perjuangan manusia dalam menghadapi perubahan iklim ekstrem.',
            'price' => 45000,
            'stock' => 20,
            'cover_photo' => 'hujan.jpg',
            'genre_id' => 3,
            'author_id' => 2
        ],
        [
            'title' => 'Supernova: Ksatria, Puteri, dan Bintang Jatuh',
            'description' => 'Eksplorasi kehidupan dan cinta dalam dunia sains dan spiritualitas.',
            'price' => 55000,
            'stock' => 10,
            'cover_photo' => 'supernova.jpg',
            'genre_id' => 5,
            'author_id' => 3
        ],
        [
            'title' => 'Ayat-Ayat Cinta',
            'description' => 'Kisah cinta penuh nilai religius yang berlatar kehidupan mahasiswa Indonesia di Mesir.',
            'price' => 50000,
            'stock' => 25,
            'cover_photo' => 'ayat - ayat cinta.jpg',
            'genre_id' => 1,
            'author_id' => 4
        ],
        [
            'title' => 'Hujan Bulan Juni',
            'description' => 'Kumpulan puisi romantis dan reflektif yang memikat hati pembaca.',
            'price' => 35000,
            'stock' => 18,
            'cover_photo' => 'hujanbulanjuni.jpg',
            'genre_id' => 3,
            'author_id' => 5
        ],
        [
            'title' => 'Dilan 1990',
            'description' => 'Cinta remaja yang manis dan kocak antara Milea dan Dilan di Bandung tahun 90-an.',
            'price' => 48000,
            'stock' => 22,
            'cover_photo' => 'dilan1990.jpg',
            'genre_id' => 1,
            'author_id' => 6
        ]
    ];

    public function getBooks()
    {
        return $this->books;
    }
}
