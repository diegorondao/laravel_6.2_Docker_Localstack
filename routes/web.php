<?php

Route::get('/', 'Home\HomeController@index')->name('home-index');

// Route::prefix('/auth')->group(function () {
//      Route::get('/login', 'Login\LoginController@index')->name('login-index');
//      Route::post('/check', 'Login\LoginController@validateLogin')->name('login-validate');
//      Route::get('/reset', 'Login\LoginController@reset')->name('login-pass-reset');
// });
