<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\trx_return;
class trx_return extends Model
{
    use HasFactory;
    protected $table = 'trx_return';
    protected $primaryKey = 'return_id';
	protected $fillable = [
	  'return_id',
	  'loan_idx',
	  'loaner_idx',
	  'car_idx',
	  'date_return',
	  'date_start',
	  'count_date',
	  'price_done',
	  'price_type',
	  'over_c_type',
	  'over_price',
	  'over_ty_price',
	];
}
