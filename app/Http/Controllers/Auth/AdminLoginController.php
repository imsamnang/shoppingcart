<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
  /*
  |--------------------------------------------------------------------------
  | Login Controller
  |--------------------------------------------------------------------------
  | | This controller handles authenticating users for the application and
  | redirecting them to your home screen. The controller uses a trait
  | to conveniently provide its functionality to your applications.
  |
  */

  use AuthenticatesUsers;

  /**
   * Where to redirect users after login.
   *
   * @var string
   */
  protected $redirectTo = '/admin/dashboard';
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('guest')->except('logout');
  }

  public function username()
  {
    $loginType = request()->input('username');
    $this->username = filter_var($loginType,FILTER_VALIDATE_EMAIL)? 'email': 'phone';
    request()->merge([$this->username => $loginType]);
    return property_exists($this,'phone') ? $this->username :'email';
  }

  public function guard()
  {
      return Auth::guard('admin');
  }

  public function showLoginForm()
  {
      return view('auth.admin_login');
  }

  public function showRegistrationForm()
  {
      return view('auth.admin_register');
  }

}
