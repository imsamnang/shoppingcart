<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $table = 'admins';

    protected $fillable = ['admin_name', 'admin_email', 'admin_password','admin_phone'];

    protected $hidden = ['password',  'remember_token'];
}
