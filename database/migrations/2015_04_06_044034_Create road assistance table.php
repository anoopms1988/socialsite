<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoadAssistanceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('road_assistance', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->integer('company_id');
                        $table->text('contact_number');
                        $table->text('address');
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
		Schema::drop('road_assistance');
	}

}
