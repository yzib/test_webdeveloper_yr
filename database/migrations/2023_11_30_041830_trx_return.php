<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TrxReturn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('trx_return', function (Blueprint $table){
			// yrib. test
			$table->integer('return_id');
			$table->integer('loan_idx');
			$table->integer('loaner_idx');
			$table->integer('car_idx');
			$table->string('date_start');
			$table->string('date_return');
			$table->string('count_date');
			$table->integer('price_done');
			$table->string('price_type');
			$table->string('over_c_date');
			$table->integer('over_price');
			$table->string('over_ty_price');
			$table->timestamps();
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
