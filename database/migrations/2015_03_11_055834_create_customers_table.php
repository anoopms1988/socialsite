<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customers', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->string('first_name', 100);
                        $table->string('last_name', 100);
                        $table->string('email', 100);
                        $table->integer('city_id',FALSE,TRUE)->length(20);
                        $table->string('mobilenumber', 100);
                        $table->enum('is_active', [0,1]);
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
		Schema::drop('customers');
	}

}
