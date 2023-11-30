<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ObjLoaner extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('obj_loaner', function (Blueprint $table){
			// yrib. test
			$table->integer('user_id');
			$table->string('name_loaner');
			$table->string('phone');
			$table->text('addr');
			$table->string('id_num');
			$table->string('password');
			$table->string('username');
			$table->timestamps();
		});
		
		DB::table('obj_loaner')
		->insert(array(
			array('user_id' => 1, 'name_loaner'=>'tes_admin', 'phone'=>'012345678', 'addr'=>'kosongdulu', 'id_num'=>'0123456789','username'=>'administrator','password'=>'12345678'),
		));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
		Schema::dropIfExists('obj_loaner');
    }
}
