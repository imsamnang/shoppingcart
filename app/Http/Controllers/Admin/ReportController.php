<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{
  public function reports()
  {
  	return view('admin.reports.reports');
  }

  public function warehouse_stock()
  {
  	return view('admin.reports.warehouse_stock');
  }

  public function best_sellers()
  {
  	return view('admin.reports.best_sellers');
  }

  public function quantity_alerts()
  {
  	return view('admin.reports.quantity_alerts');
  }

  public function expiry_alerts()
  {
  	return view('admin.reports.expiry_alerts');
  }

  public function brands()
  {
  	return view('admin.reports.brands');
  }

  public function categories()
  {
  	return view('admin.reports.categories');
  }

  public function products()
  {
  	return view('admin.reports.products');
  }

  public function inventory_in_out()
  {
  	return view('admin.reports.inventory_in_out');
  }

  public function adjustments()
  {
  	return view('admin.reports.adjustments');
  }

  public function cost_adjustments()
  {
  	return view('admin.reports.cost_adjustments');
  }

  public function products_promotion_report()
  {
  	return view('admin.reports.products_promotion_report');
  }

  public function product_sales_report()
  {
  	return view('admin.reports.product_sales_report');
  }

  public function count_money_report()
  {
  	return view('admin.reports.count_money_report');
  }

  public function register()
  {
  	return view('admin.reports.register');
  }

  public function cash_register_report()
  {
  	return view('admin.reports.cash_register_report');
  }

  public function saleman_report()
  {
  	return view('admin.reports.saleman_report');
  }

  public function saleman_group_report()
  {
  	return view('admin.reports.saleman_group_report');
  }

  public function saleman_detail_report()
  {
  	return view('admin.reports.saleman_detail_report');
  } 

  public function daily_sales()
  {
  	return view('admin.reports.daily_sales');
  }

  public function monthly_sales()
  {
  	return view('admin.reports.monthly_sales');
  }

  public function ar_aging()
  {
  	return view('admin.reports.ar_aging');
  }

  public function ap_aging()
  {
  	return view('admin.reports.ap_aging');
  }

  public function sales()
  {
  	return view('admin.reports.sales');
  }

  public function sales_detail()
  {
  	return view('admin.reports.sales_detail');
  }

  public function daily_purchases()
  {
  	return view('admin.reports.daily_purchases');
  }

  public function monthly_purchases()
  {
  	return view('admin.reports.monthly_purchases');
  }

  public function purchases()
  {
  	return view('admin.reports.purchases');
  }

  public function expenses()
  {
  	return view('admin.reports.expenses');
  }

  public function payments()
  {
  	return view('admin.reports.payments');
  }

  public function profit_loss()
  {
  	return view('admin.reports.profit_loss');
  }

  public function customers()
  {
  	return view('admin.reports.customers');
  }

  public function suppliers()
  {
  	return view('admin.reports.suppliers');
  }

  public function users()
  {
  	return view('admin.reports.users');
  }

  public function audit_logs()
  {
  	return view('admin.reports.audit_logs');
  }

}
