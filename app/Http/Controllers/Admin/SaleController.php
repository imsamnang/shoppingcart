<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SaleController extends Controller
{
  public function quotes()
  {
  	return view('admin.sales.quotes');
  }

  public function sale_orders()
  {
  	return view('admin.sales.sale_orders');
  }

  public function sales()
  {
  	return view('admin.sales.sales');
  }

  public function returns()
  {
  	return view('admin.sales.returns');
  }

  public function pos_sales()
  {
  	return view('admin.sales.pos_sales');
  }

  public function deliveries()
  {
  	return view('admin.sales.deliveries');
  }  

  public function gift_cards()
  {
  	return view('admin.sales.gift_cards');
  }
  
}
