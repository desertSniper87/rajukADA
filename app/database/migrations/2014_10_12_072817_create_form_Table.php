<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create ('form', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigInteger('applciantID')->unsigned;
			$table->string('currentAddress', 100);
			$table->string('suggestedUse')->unsigned;
			$table->bigInteger('plotLocationID')->unsigned;
			$table->date('SubmissionDate');
			$table->string('occupancyType',20);
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
		Schema::drop('form');
	}

}
