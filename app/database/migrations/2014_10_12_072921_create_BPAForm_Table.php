<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBPAFormTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('BPAForm', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigInteger('formID')->unsigned;
			$table->bigInteger('receiptNumber')->unsigned;
			$table->bigInteger('proposedStructureDetailsID')->unsigned;
			$table->bigInteger('documentsID')->unsigned;
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
		Schema::drop ('BPAForm');
	}

}
