<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCapacityTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('capacity', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->integer('seating_capacity',FALSE,TRUE)->length(20);
                        $table->double('tank_capacity');
                        $table->integer('variant_id',FALSE,TRUE)->length(20);
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
		Schema::drop('capacity');
	}

}
