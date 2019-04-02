<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class booksController extends Controller
{
    //
        public function execute(Request $request) {
    		return view('layouts.books');
    		// return view('layouts.main');

    }
}
