<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HrController extends Controller
{
  public function employees()
  {
  	return view('admin.hr.employees');
  }

  public function positions()
  {
  	return view('admin.hr.positions');
  }

  public function departments()
  {
  	return view('admin.hr.departments');
  }

  public function groups()
  {
  	return view('admin.hr.groups');
  }

}
