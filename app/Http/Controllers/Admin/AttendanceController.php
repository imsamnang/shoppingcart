<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AttendanceController extends Controller
{
  public function approve_attendances()
  {
  	return view('admin.attendances.approve_attendances');
  }
}
