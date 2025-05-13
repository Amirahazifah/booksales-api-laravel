<?php

namespace App\Http\Controllers;

use App\Models\BookModel;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $data = new BookModel(); 
        $books = $data->getBooks();
        
        return view('books', ['books' => $books]);
    }
}
