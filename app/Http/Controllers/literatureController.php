<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class literatureController extends Controller
{
    //
     public function index(Request $request) {

         $books = Book::all();
         return view('layouts.literature')->with([
             'books' => $books
         ]);


    }

    public function book($id) {

        $book = Book::find($id);
        return view('layouts.detail')->with([
            'book' => $book
        ]);


    }
}
