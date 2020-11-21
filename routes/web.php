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

Route::get('/', function () {
	$lines = DB::table('products')->get();
    return view('welcome', compact('lines'));
});

Route::get('/insert', function () {
    return view('insert');
});

Route::get('PostBlog','InsertController@InsertProduct')->name('InsertProduct');

Route::get('delete/item/{id}','Fetch_Controller@deleteSingleitem');

Route::get('update/info//{id}','Fetch_Controller@editSingleitem');

Route::get('tabledit', 'TableditController@index');

Route::post('tabledit/action', 'TableditController@action')->name('tabledit.action');

Route::get('/search','InsertController@search');


Route::get('/autocomplete','InsertController@autocomplete')->name('autocomplete');