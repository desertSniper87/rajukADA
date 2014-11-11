<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('notification', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('content', 1000);
			$table->date('date');
			$table->bigInteger('number')->unsigned;
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
		Schema::drop('notification');
	}

}
