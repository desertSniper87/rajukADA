<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//	Create users table 
		Schema::create('users', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('firstName', 15);
			$table->string('lastName', 15);
			$table->string('password', 32);
			$table->date('dateOfBirth');
			$table->string('gender', 6);
			$table->string('phoneNumber', 15);
			$table->string('currentAddress', 100);
			$table->string('permanentAdress', 100);
			$table->string('email',20);
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//	Drop users table
		Schema::drop('users');
	}

}
