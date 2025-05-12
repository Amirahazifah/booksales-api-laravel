<?php

namespace App\Models;

class AuthorModel
{
    public function getAllAuthors()
    {
        return [
            [
                'id' => 1, 
                'name' => 'Andrea Hirata', 
                'photo' => 'andrea.jpg', 
                'bio' => 'Dikenal luas melalui novel "Laskar Pelangi", fokus pada pendidikan dan kehidupan desa.'
            ],
            [
                'id' => 2, 
                'name' => 'Tere Liye', 
                'photo' => 'tere.jpg', 
                'bio' => 'Penulis terkenal asal Indonesia dengan genre fiksi dan motivasi.'
            ],
            [
                'id' => 3, 
                'name' => 'Dewi Lestari', 
                'photo' => 'dewi lestari.jpg', 
                'bio' => 'Penulis dan musisi, terkenal dengan serial "Supernova" yang bernuansa filosofis dan spiritual.'
            ],
            [
                'id' => 4, 
                'name' => 'Habiburrahman El Shirazy', 
                'photo' => 'habib.jpg', 
                'bio' => 'Penulis novel religi populer seperti "Ayat-Ayat Cinta" yang diangkat ke layar lebar.'
            ],
            [
                'id' => 5, 
                'name' => 'Sapardi Djoko Damono', 
                'photo' => 'sapardi.jpg', 
                'bio' => 'Sastrawan dan penyair legendaris Indonesia, dikenal dengan puisi romantis dan reflektif.'
            ],
            [
                'id' => 6, 
                'name' => 'Pidi Baiq', 
                'photo' => 'pidi.jpg', 
                'bio' => 'Penulis nyentrik yang menciptakan karya humor dan populer, termasuk "Dilan 1990".'
            ]
        ];
    }
}
