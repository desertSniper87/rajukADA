<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLandUseForTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create ('landUseForm', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigInteger('formID')->unsigned;
			$table->bigInteger('receiptNumber')->unsigned;
			$table->bigInteger('plotOwnershipID')->unsigned;
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
		Schema::drop('landUseForm');
	}

}
