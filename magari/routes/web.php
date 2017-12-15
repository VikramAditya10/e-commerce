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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/trial',function(){return view('front.frontt');});
Route::get('/magari',function(){return view('front.home');});
Route::resource('nerds','NerdController');
Route::get('view-records','Admin@index');
Route::get('/create','Admin@insertform');
Route::post('/insert','Admin@insert');
Route::get('/addproduct','Product@insertForm');
Route::post('/insertproduct','Product@insertProduct');
Route::get('/viewproducts','Product@viewAllProduct');
Route::get('/uploadfile',function(){return view('file-upload');});
Route::get('/addcategory','Category@insertForm');
Route::post('/insertcategory','Category@insertCategory');
Route::get('/trial','Category@trial');
?>
