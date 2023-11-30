<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trx_loan extends Model
{
    use HasFactory;
    protected $table = 'trx_loan';
    protected $primaryKey = 'loan_id';
	protected $fillable = [
	  'car_id',
	  'merk',
	  'model',
	  'car_num',
	  'price_r_d',
	];
}
