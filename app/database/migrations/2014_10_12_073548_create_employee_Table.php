<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('employee', function(Blueprint $table) {
			$table->bigIncrements('userID');
			$table->string('ID', 256);
			$table->bigInteger('salary')->unsigned;
			$table->date('hireDate');
			$table->string('password', 32);
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
		Schema::drop('employee');
	}

}
