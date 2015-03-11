<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEngineTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('engines', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->integer('variant_id', FALSE, TRUE)->length(20);
                        $table->string('torque', 100);
                        $table->string('displacement', 100);
                        $table->string('power', 100);
                        $table->integer('cylinders', FALSE, TRUE)->length(20);
                        $table->integer('valvespercylinder', FALSE, TRUE)->length(20);
                        $table->string('valvemechanism', 100);
                        $table->string('cyclinderconfiguration', 100);
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
		Schema::drop('engines');
	}

}
