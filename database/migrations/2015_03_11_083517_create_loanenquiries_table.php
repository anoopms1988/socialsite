<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoanenquiriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('loan_enquiries', function(Blueprint $table)
		{
			$table->increments('id');
                          $table->integer('cartype_id',FALSE,TRUE)->length(20);
                        $table->integer('variant_id',FALSE,TRUE)->length(20);
                        $table->integer('age',FALSE,TRUE)->length(20);
                        $table->string('occupation', 100);
                        $table->string('annual_income', 100);
                        $table->string('living_residence', 100);
                        $table->enum('exchange_car', ['yes','no']);
                        $table->string('first_name', 100);
                        $table->string('last_name', 100);
                        $table->string('email', 100);
                        $table->string('mobile', 100);
                        $table->integer('city_id',FALSE,TRUE)->length(20);
                        $table->string('pincode', 100);
                        $table->enum('wish_list', ['yes','no']);
                        $table->string('wishtime', 100);
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
		Schema::drop('loan_enquiries');
	}

}
