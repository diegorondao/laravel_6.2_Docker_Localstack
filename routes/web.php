<?php

Route::get('/', 'Store\StoreController@index')->name('store-index');

Route::prefix('/auth')->group(function () {
     Route::get('/login', 'Login\LoginController@index')->name('login-index');
     Route::post('/check', 'Login\LoginController@validateLogin')->name('login-validate');
     Route::get('/reset', 'Login\LoginController@reset')->name('login-pass-reset');
});


Route::prefix('/dashboard')->group(function () {
    Route::get('/', 'Dashboard\DashboardController@index')->name('dashboard-index');    

	Route::prefix('/produto')->group(function () {
	    Route::get('/delete', 'Dashboard\ProdutoController@delete')->name('produto-delete');    
	});

	Route::prefix('/user-profile')->group(function () {
	    Route::get('/', 'Dashboard\UserController@index')->name('user-profile');    
	});
});	

//diego.developer
//mGTURz$*BNUozfycZb4V