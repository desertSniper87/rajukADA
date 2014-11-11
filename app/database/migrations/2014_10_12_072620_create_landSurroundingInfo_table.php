<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLandSurroundingInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('landSurroundingInfo', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('currentUsage', 10);
			$table->bigInteger('nearestMainRoadWidth')->unsigned;
			$table->string('connectingRoadName', 30);
			$table->bigInteger('connectingRoadWidth')->unsigned;
			$table->boolean('isHistoricallyImportantSite');
			$table->boolean('isKeyPointInstallation');
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
		Schema::drop('landSurroundingInfo');
	}

}
