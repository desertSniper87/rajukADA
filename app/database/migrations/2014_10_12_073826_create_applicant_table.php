<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('applicant', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('name', 1000);
			$table->string('contact', 11);
			$table->string('address', 50);
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
		Schema::drop('applicant');
	}

}
