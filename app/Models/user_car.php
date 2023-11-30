<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_car extends Model
{
    use HasFactory;
	protected $fillable = [
		'sys_uname',
		'sys_pass'
	];

}
