<?php

namespace App\Http\Controllers;

use App\Models\AuthorModel; // Pastikan sudah mengimpor model AuthorModel

class AuthorController extends Controller
{
    public function index(){
        $data1 = new AuthorModel(); // Buat instance dari AuthorModel
        $authors = $data1->getAllAuthors();  // Gunakan metode yang sesuai di model
        
        return view('authors', ['authors' => $authors]); // Kirim data ke view
    }
}
