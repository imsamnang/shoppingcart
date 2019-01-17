<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PurchaseController extends Controller
{
  public function purchase_requests()
  {
  	return view('admin.purchases.purchase_requests');
  }

  public function purchase_orders()
  {
  	return view('admin.purchases.purchase_orders');
  }

  public function purchases()
  {
  	return view('admin.purchases.purchases');
  }

  public function receives()
  {
  	return view('admin.purchases.receives');
  }

  public function expenses()
  {
  	return view('admin.purchases.expenses');
  }
         
}
