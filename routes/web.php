<?php


Route::get('/', function () {
    return view('pages.home');
});

Route::get('/category', function () {
    return view('pages.category_detail');
});

Route::get('/product', function () {
    return view('pages.product_detail');
});

