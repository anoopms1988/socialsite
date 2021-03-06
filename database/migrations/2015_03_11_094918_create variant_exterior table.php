<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVariantExteriorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('variant_exterior', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->integer('variant_id', FALSE, TRUE)->length(20);
                        $table->string('features',20);
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
		Schema::drop('variant_exterior');
	}

}
