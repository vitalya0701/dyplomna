<?php

namespace App\Http\Controllers;
use blog\app\Http\Requests;
use blog\app\Http\Controllers\Controller;
use Illuminate\Http\Request;

class contacts extends Controller
{
    
     public function execute(Request $request) {
    	return view('layouts.contacts');
	});
}
