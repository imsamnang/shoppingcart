<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
  public function system_settings()
  {
  	return view('admin.settings.system_settings');
  }

  public function post_setting()
  {
  	return view('admin.settings.post_setting');
  }

  public function change_logo()
  {
  	return view('admin.settings.change_logo');
  }

  public function billers()
  {
  	return view('admin.settings.billers');
  }

  public function projects()
  {
  	return view('admin.settings.projects');
  }

  public function warehouses()
  {
  	return view('admin.settings.warehouses');
  }

  public function expense_categories()
  {
  	return view('admin.settings.expense_categories');
  }

  public function categories()
  {
  	return view('admin.settings.categories');
  }

  public function loan_terms()
  {
  	return view('admin.settings.loan_terms');
  }

  public function frequencies()
  {
  	return view('admin.settings.frequencies');
  }

  public function units()
  {
  	return view('admin.settings.units');
  }

  public function brands()
  {
  	return view('admin.settings.brands');
  }

  public function variants()
  {
  	return view('admin.settings.variants');
  }

  public function boms()
  {
  	return view('admin.settings.boms');
  }

  public function customer_groups()
  {
  	return view('admin.settings.customer_groups');
  }

  public function price_groups()
  {
  	return view('admin.settings.price_groups');
  }

  public function payment_terms()
  {
  	return view('admin.settings.payment_terms');
  }

  public function currencies()
  {
  	return view('admin.settings.currencies');
  }

  public function customer_opening_balances()
  {
  	return view('admin.settings.customer_opening_balances');
  }

  public function supplier_opening_balances()
  {
  	return view('admin.settings.supplier_opening_balances');
  }

  public function tax_rates()
  {
  	return view('admin.settings.tax_rates');
  }



  public function pos_printers()
  {
  	return view('admin.settings.pos_printers');
  }

  public function email_templates()
  {
  	return view('admin.settings.email_templates');
  }

  public function user_groups()
  {
  	return view('admin.settings.user_groups');
  }

  public function login_time()
  {
  	return view('admin.settings.login_time');
  }

  public function backups()
  {
  	return view('admin.settings.backups');
  }




}
