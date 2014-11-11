<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOwnerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create ('owner', function(Blueprint $table) {
			$table->bigIncrements('userID');
			$table->bigInteger('nationalIDnumber')->unsigned;
			$table->string('imageSource',50);
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
		Schema::drop('owner');
	}

}
