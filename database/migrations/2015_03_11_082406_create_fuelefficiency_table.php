<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuelefficiencyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fuelefficiency_details', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->integer('variant_id',FALSE,TRUE)->length(20);
                        $table->double('mileage_highway');
                        $table->double('mileage_city');
                        $table->double('mileage_overall');
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
		Schema::drop('fuelefficiency_details');
	}

}
