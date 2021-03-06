<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Altersafetyfeatures extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('safety_features', function(Blueprint $table)
		{
			$table->dropColumn('4wd');
			$table->enum('wheeldrive(4/4)', [0, 1])->default(0);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('safety_features', function(Blueprint $table)
		{
			//
		});
	}

}
