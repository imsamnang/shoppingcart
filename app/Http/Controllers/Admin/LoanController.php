<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoanController extends Controller
{
  public function add_loan()
  {
  	return view('admin.loans.add_loan');
  }

  public function list_loans()
  {
  	return view('admin.loans.list_loans');
  }

  public function missing_loans()
  {
  	return view('admin.loans.missing_loans');
  }
}
