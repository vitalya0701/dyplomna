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
use Illuminate\Http\Request;
// Route::get('/index.php.blade', function () {
//   return view('layouts.index');
//   // return view('layouts.main');
// });
<<<<<<< HEAD
//Route::get('/', function (Request $var) {
//   return view('layouts.main');
//})->name('main');


Route::get('/', 'IndexController@index')->name('main');

=======
Route::get('/1', function () {
    return view('layouts.main');
})->name('main');
Route::get('/', function () {
    return view('layouts.index');
})->name('index');
>>>>>>> refs/remotes/origin/master
Route::get('/contacts', function () {
  return view('layouts.contacts');
  // return view('layouts.main');
})->name('contacts');
<<<<<<< HEAD
Route::get('/literature', 'literatureController@index')->name('literature');
=======
Route::get('/literature', function () {
  return view('layouts.literature');
  // return view('layouts.main');
})->name('literature');
>>>>>>> refs/remotes/origin/master
Route::get('/popular', function () {
  return view('layouts.popular');
  // return view('layouts.main');
})->name('popular');
Route::get('/books', function () {
  return view('layouts.books');
  // return view('layouts.main');
<<<<<<< HEAD
})->name('books');

Route::get('book/id/{id}', 'literatureController@book' );

=======
})->name('books');Auth::routes();
Route::get('/home', function () {
  return view('home');
  // return view('layouts.main');
})->name('home');
>>>>>>> refs/remotes/origin/master

// Route::get('/test', function () {
//   return view('layouts.Admin.users');
//   // return view('layouts.main');
// });
