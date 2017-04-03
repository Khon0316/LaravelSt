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

Route::get('/', 'WelcomeController@index');
Route::resource('articles', 'ArticlesController');
// Route::get('/', function () {
    // return view('welcome');
    // $items = ['apple', 'banana', 'tomato'];
    //
    // return view('welcome', ['items' => $items]);
    // return view('errors.503');
    // return view('welcome')->with([
    //     'name' => 'Foo',
    //     'greeting' => 'Hi?',
    // ]);
// });
// Route::get('/', function () {
//     // return '<h1>Laravel</h1>';
//     return view('welcome');
// });
//
// Route::get('/', [
//     'as' => 'home',
//     function () {
//         return 'Home';
//     }
// ]);
//
// // Route::pattern('foo', '[0-9a-zA-Z]{3}');
//
// Route::get('/{foo?}', function ($foo = 'bar') {
//     return $foo;
// })->where('foo', '[0-9a-zA-Z]{5}');
