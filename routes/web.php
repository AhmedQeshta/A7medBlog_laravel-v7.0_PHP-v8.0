<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'BlogController@index');
Route::get('/blog','BlogController@getBlog')->name("Blog");
// Route::get('/about','BlogController@about')->name("about");
Route::get('/contact','BlogController@contact')->name("contact");
Route::get('post/{slug}','BlogController@show');
Route::get('{slug}', 'PagesController@show');

// Route::post('contact', function (Request $request) {
//     dd($request);
// });





Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
