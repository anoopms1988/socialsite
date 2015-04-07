<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterRoadAssistance extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('road_assistance', function(Blueprint $table)
		{
			$table->enum('is_active', ['1', '0']);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('road_assistance', function(Blueprint $table)
		{
			//
		});
	}

}
