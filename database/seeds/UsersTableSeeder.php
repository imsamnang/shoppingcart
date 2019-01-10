<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{

  public function run()
  {  	
		DB::table('admins')->insert([
			'admin_name' => 'Mr.Admin',
			'admin_email' => 'admin@gmail.com',
			'admin_phone' => '078343143',
			'admin_password' => md5('Phagna@sa'),
			'access_level' => 1,
		]);

		DB::table('admins')->insert([
			'admin_name' => 'Mr.User',
			'admin_email' => 'user@gmail.com',
			'admin_phone' => '070393143',
			'admin_password' => md5('Phagna@sa'),
			'access_level' => 2,
		]);
  }
}
