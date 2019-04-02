<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class literatureController extends Controller
{
    //
     public function execute(Request $request) {
    		return view('layouts.literature');
    		// return view('layouts.main');

    }
}
