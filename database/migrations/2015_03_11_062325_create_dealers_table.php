<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDealersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dealers', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->integer('company_id',FALSE,TRUE)->length(20);
                        $table->integer('city_id',FALSE,TRUE)->length(20);
                        $table->text('address');
                        $table->string('name', 100);
                        $table->string('phonenumber', 100);
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
		Schema::drop('dealers');
	}

}
