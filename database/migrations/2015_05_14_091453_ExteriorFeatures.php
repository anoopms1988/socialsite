<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ExteriorFeatures extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('exterior_features', function(Blueprint $table)
		{
			$table->integer('variant_id', FALSE, TRUE)->length(20);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('exterior_features', function(Blueprint $table)
		{
			//
		});
	}

}
