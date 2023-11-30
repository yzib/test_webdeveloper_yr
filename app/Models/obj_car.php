<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class obj_car extends Model
{
    use HasFactory;
    protected $table = 'obj_loaner';
    protected $primaryKey = 'user_id';
	protected $fillable = [
	  'car_id',
	  'merk',
	  'model',
	  'car_num',
	  'price_r_d',
	];
}
