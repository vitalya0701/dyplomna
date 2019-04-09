<?php
use Illuminate\Http\Request;

Route::get('', ['as' => 'admin.dashboard', function () {
	$content = 'Define your dashboard here.';
	return AdminSection::view($content, 'Dashboard');
}]);

Route::get('information', ['as' => 'admin.information', function () {
	$content = 'Define your information here.';
	return AdminSection::view($content, 'Information');
}]);

// Route::get('users', ['as' => 'admin.users', function () {
// 	$data = 
// 	$content = view('layouts.Admin.users')->with('data', $data);
// 	// dd($data);
// 	return AdminSection::view($content, 'Users');
// }]);

Route::get('users',['as' => 'admin.users', function() {
	return AdminSection::view(App\Http\Controllers\Admin\AdminController::index(), 'Information');
}]);

Route::get('users/add',['as' => 'admin.users_form', function(Request $request) {
	return AdminSection::view(App\Http\Controllers\Admin\AdminController::add($request), 'User add');
}]);

