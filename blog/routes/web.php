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
    return view('admin.index');
});
//adminpage
Route::get ('admin/index.html',['uses' => 'IndexController@index'])->name('index');
Route::get ('admin/listvideos.html',['uses' => 'VidesosController@index'])->name('listvideos');
Route::get ('admin/addvideos.html',['uses' => 'VidesosController@create'])->name('addvideos');
Route::get ('admin/listcategory.html',['uses' => 'CategoryController@index'])->name('listcategory');
Route::get ('admin/addcategory.html',['uses' => 'CategoryController@create'])->name('addcategory');
Route::get ('admin/listsubvideos.html',['uses' => 'SubvideosController@index'])->name('listsubvideos');
Route::get ('admin/addsubvideos.html',['uses' => 'SubvideosController@create'])->name('addsubvideos');
Route::get ('admin/listuser.html',['uses' => 'UserController@index'])->name('listuser');
Route::get ('admin/adduser.html',['uses' => 'UserController@create'])->name('adduser');
Route::get ('admin/listlogos.html',['uses' => 'LogosController@index'])->name('listlogos');
Route::get ('admin/addlogos.html',['uses' => 'LogosController@create'])->name('addlogos');
Route::get ('admin/listfooter.html',['uses' => 'FooterController@index'])->name('listfooter');
Route::get ('admin/addfooter.html',['uses' => 'FooterController@create'])->name('addfooter');

