<?php

namespace App\Http\Controllers\Admin;

use blog\app\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    public function execute(Request $request) {
    		$data['games'] = ['Gradius', 'Kirbys Adventure', 'Pac-Man'];
    		return view('layouts.Admin.users', $data);
    		// return view('layouts.main');

    }

    public static function index() 
    {
		$data = DB::table('users')->get();
		// dd($data);
    	return view('layouts.Admin.users')->with('data', $data);
    }

    public static function add(Request $request)
    {
    	$user = new User();
    	if ($request->isMethod('get')) {
    		$data = $request->all();
 			$user->name = $data['name'];
 			$user->email = $data['email'];
 			$user->password = $data['password'];

    		$user->save();

		}
		return view('layouts.Admin.users_form');
    }
}
