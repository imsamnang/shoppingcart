<?php

// FrontEnd Site
Route::get('/','HomeController@index')->name('home');

Route::get('/category', function () {
    return view('pages.category_detail');
});

Route::get('/product', function () {
    return view('pages.product_detail');
});



// Backend Site
// Route::get('/login','AdminController@login')->name('login');
Route::get('/register','AdminController@register')->name('register');
Route::get('/cpanel','AdminController@showDashboard')->name('dashboard');
Route::post('/admin_dashboard','AdminController@dashboard');53.
Auth::routes();

