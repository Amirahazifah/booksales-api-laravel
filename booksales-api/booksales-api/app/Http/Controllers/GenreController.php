<?php

namespace App\Http\Controllers;

use App\Models\GenreModel;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index(){
        $data2 = new GenreModel();
        $genres = $data2->getGenres();
        
        return view('genres', ['genres' => $genres]);
    }
}
