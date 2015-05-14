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
			$table->enum('abs', [0, 1])->default(0);
            $table->enum('airbags', [0, 1])->default(0);
            $table->enum('immobilizer', [0, 1])->default(0);
            $table->enum('hill_control', [0, 1])->default(0);
            $table->enum('4wd', [0, 1])->default(0);
            $table->enum('central_locking', [0, 1])->default(0);
            $table->enum('ebd', [0, 1])->default(0);
            $table->enum('child_safety_lock', [0, 1])->default(0);
            $table->enum('traction_control', [0, 1])->default(0);
            $table->enum('hill_descent', [0, 1])->default(0);
            $table->enum('esp', [0, 1])->default(0);
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
