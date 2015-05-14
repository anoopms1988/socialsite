<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExteriorFeaturesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('exterior_features', function(Blueprint $table)
		{
			$table->increments('id');
			$table->enum('keyless_entry', [0, 1])->default(0);
			$table->enum('sunroof', [0, 1])->default(0);
			$table->enum('rear_wiper', [0, 1])->default(0);
			$table->enum('rain_sensing_wipers', [0, 1])->default(0);
			$table->enum('alloy_wheels', [0, 1])->default(0);
			$table->enum('roof_rails', [0, 1])->default(0);
			$table->enum('projector_lamps', [0, 1])->default(0);
			$table->enum('fog_lights', [0, 1])->default(0);
			$table->enum('moon_roof', [0, 1])->default(0);
			$table->enum('auto_headlamps', [0, 1])->default(0);
			$table->enum('steel_rims', [0, 1])->default(0);
			$table->enum('rear_spoiler', [0, 1])->default(0);
			$table->enum('chrome_grille', [0, 1])->default(0);
			$table->enum('daytime_running_lamps', [0, 1])->default(0);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('exterior_features');
	}

}
