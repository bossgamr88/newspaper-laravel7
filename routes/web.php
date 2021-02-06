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

// fontController
Route::get('/','frontController@index');
Route::get('category','frontController@category');
Route::get('post','frontController@post');

// adminController (Category)
Route::get('admin','adminController@index');
Route::get('viewcategory','adminController@viewcategory');
Route::get('editcategory/{id}','adminController@editCategory');

Route::post('addcategory','crudController@insertData');
Route::post('updatecategory/{id}','crudController@updateData');
Route::post('multipledelete','adminController@multipleDelete');

// adminController (Settings)
Route::get('settings','adminController@settings');
Route::post('addsettings','crudController@insertData');