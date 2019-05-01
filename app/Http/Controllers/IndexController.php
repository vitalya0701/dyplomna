<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
<<<<<<< HEAD
    public function index(Request $request)
    {
         return view('layouts.index');
=======
    //
    public function execute(Request $request) {
    		return view('index');
    		// return view('layouts.main');

>>>>>>> refs/remotes/origin/master
    }
}
