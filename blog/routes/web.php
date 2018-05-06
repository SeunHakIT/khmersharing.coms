<?php



Route::prefix('administrator')->group(function () {
    Route::get('/', ['uses' => 'LoginController@index'])->name('login');
    Route::post('/logins', ['uses' => 'LoginController@postLogin'])->name('logins');
    //for videos
    Route::get('/listvideos', ['uses' => 'VidesosController@index'])->name('listvideos');
    Route::get('/update_status', ['uses' => 'VidesosController@updateStatus'])->name('updateStatus');
    Route::get('/delect/{id}', ['uses' => 'VidesosController@destroy'])->name('delectVideos');
    Route::get('/edite/{id}', ['uses' => 'VidesosController@edit'])->name('edit-videos');
    Route::post('/editevideos/{id}', ['uses' => 'VidesosController@update'])->name('updatevideos');
    Route::get('/addvideos', ['uses' => 'VidesosController@create'])->name('addvideos');
    Route::post('/addvideos', ['uses' => 'VidesosController@store'])->name('save-videos');
    Route::get('/dashboard', ['uses' => 'VidesosController@countvideos'])->name('dashboard');

    //subvideos
    Route::get('/listsubvideos', ['uses' => 'SubvideosController@index'])->name('listsubvideos');
    Route::get('/createsubvideos', ['uses' => 'SubvideosController@create'])->name('createsubvideos');
    Route::post('/createsubvideos', ['uses' => 'SubvideosController@store'])->name('savesubvideos');
    Route::get('/updatesubvideos/{id}', ['uses' => 'SubvideosController@edit'])->name('updatesubvideos');
    Route::post('/updatesubvideos/{id}', ['uses' => 'SubvideosController@update'])->name('updatesubvideossave');
    Route::get('/updatestatussub', ['uses' => 'SubvideosController@updateStatus'])->name('updateStatuss');
    Route::get('/delectsubvidoes/{id}', ['uses' => 'SubvideosController@destroy'])->name('delectsubVideos');

    //for category
    Route::get('/listcategory', ['uses' => 'CategoryController@index'])->name('listcategory');
    Route::get('/delect-category/{id}', ['uses' => 'CategoryController@destroy'])->name('delect-category');
    Route::get('/editecategory/{id}', ['uses' => 'CategoryController@edit'])->name('editcategory');
    Route::post('/editecategory/{id}', ['uses' => 'CategoryController@update'])->name('update');
    Route::get('/addcategory', ['uses' => 'CategoryController@create'])->name('addcategory');
    Route::post('/addcategory', ['uses' => 'CategoryController@store'])->name('save');

    //user
    Route::get('/listuser', 'UserController@index')->name('listuser');
    Route::get('/createuser', 'UserController@create')->name('createuser');
    Route::post('/SaveUser', 'UserController@store')->name('SaveUser');
    Route::get('/updateuser/{id}', ['uses' => 'UserController@edit'])->name('updateuser');
    Route::post('/updateusers/{id}', ['uses' => 'UserController@update'])->name('updateusers');
    Route::get('/delectuser/{id}', ['uses' => 'UserController@destroy'])->name('delectuser');

    //Logos
    Route::get('/logos', 'LogosController@create')->name('addlogos');
    Route::get('/listlogos', 'LogosController@index')->name('listlogos');
});
