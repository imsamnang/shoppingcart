<?php

Route::view('/flaty','layouts.admin.flaty_layout');
Route::view('/metro','layouts.admin.admin_layout');
Route::view('/sma','layouts.admin.sma_layout');

// Product Route
Route::resource('/product','Admin\ProductController');
Route::get('product_import','Admin\ProductController@import_product')->name('product.import');
Route::get('print_barcodes','Admin\ProductController@print_barcodes')->name('product.print_barcodes');
Route::get('using_stocks','Admin\ProductController@using_stocks')->name('product.using_stocks');
Route::get('stock_counts','Admin\ProductController@stock_counts')->name('product.stock_counts');
Route::get('quantity_adjustments','Admin\ProductController@quantity_adjustments')->name('product.quantity_adjustments');
Route::get('cost_adjustments','Admin\ProductController@cost_adjustments')->name('product.cost_adjustments');
Route::get('converts','Admin\ProductController@converts')->name('product.converts');
Route::get('transfers','Admin\ProductController@transfers')->name('product.transfers');

// Loan Route
Route::get('add_loan','Admin\LoanController@add_loan')->name('loan.add_loan');
Route::get('list_loans','Admin\LoanController@list_loans')->name('loan.list_loans');
Route::get('missing_loans','Admin\LoanController@missing_loans')->name('loan.missing_loans');

// Sale Route
Route::get('quotes','Admin\SaleController@quotes')->name('sale.quotes');
Route::get('sale_orders','Admin\SaleController@sale_orders')->name('sale.sale_orders');
Route::get('sales','Admin\SaleController@sales')->name('sale.sales');
Route::get('returns','Admin\SaleController@returns')->name('sale.returns');
Route::get('pos_sales','Admin\SaleController@pos_sales')->name('sale.pos_sales');
Route::get('deliveries','Admin\SaleController@deliveries')->name('sale.deliveries');
Route::get('gift_cards','Admin\SaleController@gift_cards')->name('sale.gift_cards');


// Purchase Route
Route::get('purchase_requests','Admin\SaleController@purchase_requests')->name('sale.purchase_requests');
Route::get('purchase_orders','Admin\SaleController@purchase_orders')->name('sale.purchase_orders');
Route::get('/purchase/purchases','Admin\SaleController@purchases')->name('sale.purchases');
Route::get('/purchase/receives','Admin\SaleController@receives')->name('sale.receives');
Route::get('/purchase/expenses','Admin\SaleController@expenses')->name('sale.expenses');




// Product Category
Route::resource('/category','Admin\CategoryController');

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
Route::group(['prefix'=>'admin',['middleware'=>'admin']], function() {
	Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
	Route::get('/list_category','Admin\CategoryController@index')->name('admin.category.index');
	Route::get('/add_category','Admin\CategoryController@create')->name('admin.category.create');
	Route::post('/save_category','Admin\CategoryController@store')->name('admin.category.store');
	Route::get('/publish/{id}','Admin\CategoryController@publish')->name('admin.category.publish');
	Route::get('/unpublish/{id}','Admin\CategoryController@unpublish')->name('admin.category.unpublish');
});



Route::get('/', function () {
    return view('pages.home');
});

Route::view('/ace','layouts.admin.admin_master');

// Route::get('/product', function () {
//     return view('pages.product_detail');
// });

// Route::get('/category', function () {
//     return view('pages.category_detail');
// });


