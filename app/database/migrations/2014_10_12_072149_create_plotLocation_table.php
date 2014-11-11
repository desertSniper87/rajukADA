<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlotLocationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Create plot location table
		Schema::create('plotLocation', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('type', 10);
			$table->bigInteger('csNumber')->unsigned;
			$table->bigInteger('rsNumber')->unsigned;
			$table->bigInteger('msNumber')->unsigned;
			$table->bigInteger('sectorNumber')->unsigned;
			$table->string('landArea', 10);
			$table->string('mouzaName', 30);
			$table->bigInteger('thanaNumber')->unsigned;
			$table->bigInteger('wardNumber')->unsigned;
			$table->string('streetName', 30);
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
		Schema::drop('plotLocation');
	}

}
