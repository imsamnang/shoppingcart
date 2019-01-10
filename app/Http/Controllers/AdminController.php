<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
session_start();

class AdminController extends Controller
{
  public function login()
  {
  	return view('admin.admin_login');
  }

  public function register()
  {
  	return view('admin.admin_register');
  }

  public function showDashboard()
  {
  	return view('admin.dashboard');
  }

  public function dashboard(Request $request)
  {
  	$admin_email = $request->username;
  	$admin_password = md5($request->password);
  	$result = DB::table('admins')
  				->where('admin_email',$admin_email)
  				->where('admin_password',$admin_password)
  				->first();
  	if ($result) {
  		Session::put('admin_name',$result->admin_name);
  		Session::put('admin_id',$result->admin_id);
  		return redirect(url('/cpanel'));
  	} else {
  		Session::put('message','Email or Password in valid');
  		return redirect(url('/login'));
  	}
  }

}
