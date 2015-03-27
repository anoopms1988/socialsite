<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterBrakesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('brakes', function(Blueprint $table)
		{
			$table->integer('variant_id',FALSE,TRUE)->length(20);
                        $table->string('rear_brakes', 100);
                        $table->string('front_brakes', 100);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('brakes', function(Blueprint $table)
		{
			//
		});
	}

}
