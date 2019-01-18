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

// Route accountings
Route::get('accountings','Admin\AccountingController@accountings')->name('accountings.accountings');
Route::get('/accountings/enter_journals','Admin\AccountingController@enter_journals')->name('accountings.enter_journals');
Route::get('/accountings/journals','Admin\AccountingController@journals')->name('accountings.journals');
Route::get('/accountings/general_ledger','Admin\AccountingController@general_ledger')->name('accountings.general_ledger');
Route::get('/accountings/trial_balance','Admin\AccountingController@trial_balance')->name('accountings.trial_balance');
Route::get('/accountings/income_statement','Admin\AccountingController@income_statement')->name('accountings.income_statement');
Route::get('/accountings/balance_sheet','Admin\AccountingController@balance_sheet')->name('accountings.balance_sheet');
Route::get('/accountings/cash_flow','Admin\AccountingController@cash_flow')->name('accountings.cash_flow');
Route::get('/accountings/cash_books','Admin\AccountingController@cash_books')->name('accountings.cash_books');

// Route People
Route::get('users','Admin\PeopleController@users')->name('people.users');
Route::get('customers','Admin\PeopleController@customers')->name('people.customers');
Route::get('suppliers','Admin\PeopleController@suppliers')->name('people.suppliers');

// Route HR
Route::get('employees','Admin\HrController@employees')->name('hr.employees');
Route::get('/hr/positions','Admin\HrController@positions')->name('hr.positions');
Route::get('/hr/departments','Admin\HrController@departments')->name('hr.departments');
Route::get('/hr/groups','Admin\HrController@groups')->name('hr.groups');

// Route Attendances
Route::get('/approve_attendances','Admin\AttendanceController@approve_attendances')->name('attendances.approve_attendances');

// Route Attendances
Route::get('/notifications','Admin\NotificationController@notifications')->name('notifications.notifications');

// Route SETTINGS
Route::get('/system_settings','Admin\SettingController@system_settings')->name('settings.system_settings');
Route::get('/pos/settings','Admin\SettingController@post_setting')->name('settings.post_setting');
Route::get('/billers','Admin\SettingController@billers')->name('settings.billers');
Route::get('system_settings/projects','Admin\SettingController@projects')->name('settings.projects');
Route::get('system_settings/warehouses','Admin\SettingController@warehouses')->name('settings.warehouses');
Route::get('system_settings/expense_categories','Admin\SettingController@expense_categories')->name('settings.expense_categories');
Route::get('system_settings/categories','Admin\SettingController@categories')->name('settings.categories');
Route::get('system_settings/loan_terms','Admin\SettingController@loan_terms')->name('settings.loan_terms');
Route::get('system_settings/frequencies','Admin\SettingController@frequencies')->name('settings.frequencies');
Route::get('system_settings/units','Admin\SettingController@units')->name('settings.units');
Route::get('system_settings/brands','Admin\SettingController@brands')->name('settings.brands');
Route::get('system_settings/variants','Admin\SettingController@variants')->name('settings.variants');
Route::get('system_settings/boms','Admin\SettingController@boms')->name('settings.boms');
Route::get('system_settings/customer_groups','Admin\SettingController@customer_groups')->name('settings.customer_groups');
Route::get('system_settings/price_groups','Admin\SettingController@price_groups')->name('settings.price_groups');
Route::get('system_settings/payment_terms','Admin\SettingController@payment_terms')->name('settings.payment_terms');
Route::get('system_settings/currencies','Admin\SettingController@currencies')->name('settings.currencies');
Route::get('sales/customer_opening_balances','Admin\SettingController@customer_opening_balances')->name('settings.customer_opening_balances');
Route::get('purchases/supplier_opening_balances','Admin\SettingController@supplier_opening_balances')->name('settings.supplier_opening_balances');
Route::get('system_settings/tax_rates','Admin\SettingController@tax_rates')->name('settings.tax_rates');
Route::get('pos/printers','Admin\SettingController@pos_printers')->name('settings.pos_printers');
Route::get('system_settings/email_templates','Admin\SettingController@email_templates')->name('settings.email_templates');
Route::get('system_settings/user_groups','Admin\SettingController@user_groups')->name('settings.user_groups');
Route::get('system_settings/login_time','Admin\SettingController@login_time')->name('settings.login_time');
Route::get('system_settings/backups','Admin\SettingController@backups')->name('settings.backups');

// Route Reports

Route::get('reports','Admin\ReportController@reports')->name('reports.reports');
Route::get('reports/warehouse_stock','Admin\ReportController@warehouse_stock')->name('reports.warehouse_stock');
Route::get('reports/best_sellers','Admin\ReportController@best_sellers')->name('reports.best_sellers');
Route::get('reports/quantity_alerts','Admin\ReportController@quantity_alerts')->name('reports.quantity_alerts');
Route::get('reports/expiry_alerts','Admin\ReportController@expiry_alerts')->name('reports.expiry_alerts');
Route::get('reports/brands','Admin\ReportController@brands')->name('reports.brands');
Route::get('reports/categories','Admin\ReportController@categories')->name('reports.categories');
Route::get('reports/products','Admin\ReportController@products')->name('reports.products');
Route::get('reports/inventory_in_out','Admin\ReportController@inventory_in_out')->name('reports.inventory_in_out');
Route::get('reports/adjustments','Admin\ReportController@adjustments')->name('reports.adjustments');
Route::get('reports/cost_adjustments','Admin\ReportController@cost_adjustments')->name('reports.cost_adjustments');
Route::get('reports/products_promotion_report','Admin\ReportController@products_promotion_report')->name('reports.products_promotion_report');
Route::get('reports/product_sales_report','Admin\ReportController@product_sales_report')->name('reports.product_sales_report');
Route::get('reports/count_money_report','Admin\ReportController@count_money_report')->name('reports.count_money_report');
Route::get('reports/register','Admin\ReportController@register')->name('reports.register');
Route::get('reports/cash_register_report','Admin\ReportController@cash_register_report')->name('reports.cash_register_report');
Route::get('reports/saleman_report','Admin\ReportController@saleman_report')->name('reports.saleman_report');
Route::get('reports/saleman_group_report','Admin\ReportController@saleman_group_report')->name('reports.saleman_group_report');
Route::get('reports/saleman_detail_report','Admin\ReportController@saleman_detail_report')->name('reports.saleman_detail_report');
Route::get('reports/daily_sales','Admin\ReportController@daily_sales')->name('reports.daily_sales');
Route::get('reports/monthly_sales','Admin\ReportController@monthly_sales')->name('reports.monthly_sales');
Route::get('reports/ar_aging','Admin\ReportController@ar_aging')->name('reports.ar_aging');
Route::get('reports/ap_aging','Admin\ReportController@ap_aging')->name('reports.ap_aging');
Route::get('reports/sales','Admin\ReportController@sales')->name('reports.sales');
Route::get('reports/sales_detail','Admin\ReportController@sales_detail')->name('reports.sales_detail');
Route::get('reports/daily_purchases','Admin\ReportController@daily_purchases')->name('reports.daily_purchases');
Route::get('reports/monthly_purchases','Admin\ReportController@monthly_purchases')->name('reports.monthly_purchases');
Route::get('reports/purchases','Admin\ReportController@purchases')->name('reports.purchases');
Route::get('reports/expenses','Admin\ReportController@expenses')->name('reports.expenses');
Route::get('reports/payments','Admin\ReportController@payments')->name('reports.payments');
Route::get('reports/profit_loss','Admin\ReportController@profit_loss')->name('reports.profit_loss');
Route::get('reports/customers','Admin\ReportController@customers')->name('reports.customers');
Route::get('reports/suppliers','Admin\ReportController@suppliers')->name('reports.suppliers');
Route::get('reports/users','Admin\ReportController@users')->name('reports.users');
Route::get('reports/audit_logs','Admin\ReportController@audit_logs')->name('reports.audit_logs');

















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


