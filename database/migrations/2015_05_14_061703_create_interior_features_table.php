<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInteriorFeaturesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('interior_features', function(Blueprint $table)
		{
			$table->increments('id');
			$table->enum('power_steering', [0, 1])->default(0);
            $table->enum('power_windows', [0, 1])->default(0);
            $table->enum('anti_pinch', [0, 1])->default(0);
            $table->enum('air_con', [0, 1])->default(0);
            $table->enum('audio_system', [0, 1])->default(0);
            $table->enum('electric_mirrors', [0, 1])->default(0);
            $table->enum('deffoger', [0, 1])->default(0);
            $table->enum('leather_seats', [0, 1])->default(0);
            $table->enum('reversing_camera', [0, 1])->default(0);
            $table->enum('bluetooth_connectivity', [0, 1])->default(0);
            $table->enum('cruise_control', [0, 1])->default(0);
            $table->enum('remote_boot_release', [0, 1])->default(0);
            $table->enum('chilled_glovebox', [0, 1])->default(0);
            $table->enum('rear_ac_vents', [0, 1])->default(0);
            $table->enum('keyless_start_stop_button', [0, 1])->default(0);
            $table->enum('electric_foldable_mirrors', [0, 1])->default(0);
            $table->enum('tachometer', [0, 1])->default(0);
            $table->enum('arm_rest', [0, 1])->default(0);
            $table->enum('steering_controls', [0, 1])->default(0);
            $table->enum('driver_info_display', [0, 1])->default(0);
            $table->enum('foot_rest', [0, 1])->default(0);
            $table->enum('driver_seat_height_adjust', [0, 1])->default(0);
            $table->enum('power_seats', [0, 1])->default(0);
            $table->integer('variant_id', FALSE, TRUE)->length(20);
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
		Schema::drop('interior_features');
	}

}
