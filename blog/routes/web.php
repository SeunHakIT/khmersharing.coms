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
Route::get ('/index.html',['uses' => 'IndexController@index'])->name('index');
Route::get ('/listvideos.html',['uses' => 'VidesosController@index'])->name('listvideos');
Route::get ('/addvideos.html',['uses' => 'VidesosController@create'])->name('addvideos');
Route::get ('/listcategory.html',['uses' => 'CategoryController@index'])->name('listcategory');
Route::get ('/addcategory.html',['uses' => 'CategoryController@create'])->name('addcategory');
Route::get ('/listsubvideos.html',['uses' => 'SubvideosController@index'])->name('listsubvideos');
Route::get ('/addsubvideos.html',['uses' => 'SubvideosController@create'])->name('addsubvideos');
Route::get ('/listuser.html',['uses' => 'UserController@index'])->name('listuser');
Route::get ('/adduser.html',['uses' => 'UserController@create'])->name('adduser');
Route::get ('/listlogos.html',['uses' => 'LogosController@index'])->name('listlogos');
Route::get ('/addlogos.html',['uses' => 'LogosController@create'])->name('addlogos');
Route::get ('/listfooter.html',['uses' => 'FooterController@index'])->name('listfooter');
Route::get ('/addfooter.html',['uses' => 'FooterController@create'])->name('addfooter');

