<?php

/**
===========================Front Site==========================
 */
Auth::routes();
Route::get('/home','HomeController@index')->name('home');




/**
===========================Backend Site==========================
 */
// admin login route

Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.post');
Route::post('/admin/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

// admn register
Route::get('admin/register','Auth\AdminRegisterController@showRegistration')->name('admin.register');

/**
 * route only for admin profile
 */
Route::group(['middleware'=>'admin'], function() {
	Route::get('/admin/dashboard', 'AdminController@dashboard')->name('dashboard');	
});



Route::get('/', function () {
    return view('pages.home');
});

Route::get('/product', function () {
    return view('pages.product_detail');
});

Route::get('/category', function () {
    return view('pages.category_detail');
});


