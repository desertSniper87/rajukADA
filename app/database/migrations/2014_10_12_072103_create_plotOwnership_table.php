<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlotOwnershipTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// 
		Schema::create('plotOwnership', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigInteger('ownerId')->unsigned;
			$table->string('ownershipType', 10);
			$table->string('ownershipSource', 10);
			$table->string('ownershipData', 100);
			$table->date('registrationDate');
			$table->bigInteger('documentNumber')->unsigned;
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
		Schema::drop('plotOwnership');
	}

}
