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
//Route::get('/', function (Request $var) {
//   return view('layouts.main');
//})->name('main');


Route::get('/', 'IndexController@index')->name('main');

Route::get('/contacts', function () {
  return view('layouts.contacts');
  // return view('layouts.main');
})->name('contacts');
Route::get('/literature', 'literatureController@index')->name('literature');
Route::get('/popular', function () {
  return view('layouts.popular');
  // return view('layouts.main');
})->name('popular');
Route::get('/books', function () {
  return view('layouts.books');
  // return view('layouts.main');
})->name('books');

Route::get('book/id/{id}', 'literatureController@book' );


// Route::get('/test', function () {
//   return view('layouts.Admin.users');
//   // return view('layouts.main');
// });
