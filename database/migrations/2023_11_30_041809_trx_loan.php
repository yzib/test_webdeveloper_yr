<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TrxLoan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('trx_loan', function (Blueprint $table){
			// yrib. test
			$table->integer('loan_id');
			$table->string('date_start');
			$table->string('date_end');
			$table->integer('loaner_idx');
			$table->integer('car_idx');
			$table->integer('price');
			$table->string('price_type');
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
