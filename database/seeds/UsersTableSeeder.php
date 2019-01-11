<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{

  public function run()
  {  	
		DB::table('admins')->insert([
			'name' => 'Mr.Admin',
			'email' => 'admin@gmail.com',
			'phone' => '078343143',
			'password' => bcrypt('Phagna@sa225'),
		]);

		DB::table('users')->insert([
			'name' => 'Mr.User',
			'email' => 'user@gmail.com',
			'phone' => '070393143',
			'password' => bcrypt('Phagna@sa225'),
		]);
  }
}
