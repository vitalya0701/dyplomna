<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('layouts.index.page');
});*/

// Route::get('/index.php.blade', function () {
//   return view('layouts.index');
//   // return view('layouts.main');
// });
Route::get('/', function () {
    return view('layouts.main');
})->name('main');
Route::get('/contacts', function () {
  return view('layouts.contacts');
  // return view('layouts.main');
});
Route::get('/literature', function () {
  return view('layouts.literature');
  // return view('layouts.main');
});
Route::get('/popular', function () {
  return view('layouts.popular');
  // return view('layouts.main');
});
Route::get('/books', function () {
  return view('layouts.books');
  // return view('layouts.main');
});

// Route::get('/test', function () {
//   return view('layouts.Admin.users');
//   // return view('layouts.main');
// });