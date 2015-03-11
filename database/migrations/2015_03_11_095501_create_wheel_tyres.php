<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWheelTyres extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wheel_tyres', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->integer('variant_id', FALSE, TRUE)->length(20);
                        $table->string('tyres', 100);
                        $table->string('wheelsize', 100);
                        $table->string('wheeltype', 100);
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
		Schema::drop('wheel_tyres');
	}

}
