<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NotificationController extends Controller
{
	public function notifications()
	{
  	return view('admin.notifications.notifications');
	}
}
