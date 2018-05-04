<?php



 Route::prefix('administrator')->group(function () {
    Route::get('/', ['uses' => 'LoginController@index'])->name('login');
    Route::post('/logins', ['uses' => 'LoginController@login'])->name('logins');
    Route::get('/dashboard', ['uses' => 'IndexController@index'])->name('index');
    Route::get('/listvideos', ['uses' => 'VidesosController@index'])->name('listvideos');
    Route::get('/update_status', ['uses' => 'VidesosController@updateStatus'])->name('updateStatus');
    Route::get('/delect/{id}', ['uses' => 'VidesosController@destroy'])->name('delectVideos');
    Route::get('/edite/{id}', ['uses' => 'VidesosController@edit'])->name('edit-videos');
    Route::post('/edite/{id}', ['uses' => 'VidesosController@edit'])->name('save-updatevideos');
    Route::get('/addvideos', ['uses' => 'VidesosController@create'])->name('addvideos');
    Route::post('/addvideos', ['uses' => 'VidesosController@store'])->name('save-videos');
    Route::get('/listcategory', ['uses' => 'CategoryController@index'])->name('listcategory');
    Route::get('/delect-category/{id}', ['uses' => 'CategoryController@destroy'])->name('delect-category');
    Route::get('/editecategory/{id}', ['uses' => 'CategoryController@edit'])->name('editcategory');
    Route::post('/editecategory/{id}', ['uses' => 'CategoryController@update'])->name('update');
    Route::get('/addcategory', ['uses' => 'CategoryController@create'])->name('addcategory');
    Route::post('/addcategory', ['uses' => 'CategoryController@store'])->name('save');
    Route::get('/listsubvideos', ['uses' => 'SubvideosController@index'])->name('listsubvideos');
    Route::get('/addsubvideos', ['uses' => 'SubvideosController@create'])->name('addsubvideos');
    Route::get('/listlogos', ['uses' => 'LogosController@index'])->name('listlogos');
    Route::get('/addlogos', ['uses' => 'LogosController@create'])->name('addlogos');
    Route::get('/listfooter', ['uses' => 'FooterController@index'])->name('listfooter');
    Route::get('/addfooter', ['uses' => 'FooterController@create'])->name('addfooter');

    //user
    Route::get('/listuser', 'UserController@index')->name('listuser');
    Route::get('/createuser', 'UserController@create')->name('createuser');
    Route::post('/SaveUser', 'UserController@store')->name('SaveUser');
    Route::get('/updateuser/{id}', ['uses' => 'UserController@edit'])->name('updateuser');
    Route::post('/updateusers/{id}', ['uses' => 'UserController@update'])->name('updateusers');


    Route::get('/delectuser/{id}', ['uses' => 'UserController@destroy'])->name('delectuser');


});
