<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SafetyFeatures extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('safety_features', function(Blueprint $table)
		{
			$table->dropColumn('abs');
			$table->dropColumn('airbags');
			$table->dropColumn('immobilizer');
			$table->dropColumn('hill_control');
			$table->dropColumn('4wd');
			$table->dropColumn('central_locking');
			$table->dropColumn('ebd');
			$table->dropColumn('child_safety_lock');
			$table->dropColumn('traction_control');
			$table->dropColumn('hill_descent');
			$table->dropColumn('esp');
			
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
