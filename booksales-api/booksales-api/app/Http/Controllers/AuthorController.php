<?php

namespace App\Http\Controllers;

use App\Models\AuthorModel;  

class AuthorController extends Controller
{
    public function index(){
        $data1 = new AuthorModel(); 
        $authors = $data1->getAllAuthors();  
        
        return view('authors', ['authors' => $authors]); 
    }
}
