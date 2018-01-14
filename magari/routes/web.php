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
Route::get('/shop',function(){return view('front.home');});
Route::resource('nerds','NerdController');
Route::get('view-records','Admin@index');
Route::get('/create','Admin@insertform');
Route::post('/insert','Admin@insert');
Route::get('/addproduct','admin\Product@insertForm');
Route::post('/insertproduct','admin\Product@insertProduct');
Route::get('/viewproducts','admin\Product@viewAllProduct');
Route::get('/uploadfile',function(){return view('file-upload');});
Route::get('/addcategory','admin\Category@insertForm');
Route::post('/insertcategory','admin\Category@insertCategory');
Route::get('/trial',function(){return view('layout.front.com.menu');});
Route::get('/productlist','front\CategoryProductList@trial');
?>
