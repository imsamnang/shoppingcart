<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountingController extends Controller
{
  public function accountings()
  {
  	return view('admin.accountings.accountings');
  }

  public function enter_journals()
  {
  	return view('admin.accountings.enter_journals');
  }

  public function journals()
  {
  	return view('admin.accountings.journals');
  }

  public function general_ledger()
  {
  	return view('admin.accountings.general_ledger');
  }

  public function trial_balance()
  {
  	return view('admin.accountings.trial_balance');
  }

  public function income_statement()
  {
  	return view('admin.accountings.income_statement');
  }

  public function balance_sheet()
  {
  	return view('admin.accountings.balance_sheet');
  }

  public function cash_flow()
  {
  	return view('admin.accountings.cash_flow');
  }

  public function cash_books()
  {
  	return view('admin.accountings.cash_books');
  }  
}
