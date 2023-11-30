<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ObjCar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('obj_car', function (Blueprint $table){
			// yrib. test
			$table->integer('car_id');
			$table->string('name_loaner');
			$table->string('merk');
			$table->text('addr');
			$table->string('model');
			$table->string('car_num');
			$table->integer('price_r_d');
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
