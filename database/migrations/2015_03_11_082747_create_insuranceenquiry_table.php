<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsuranceenquiryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('insuranceenquiry_details', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->integer('cartype_id',FALSE,TRUE)->length(20);
                        $table->integer('variant_id',FALSE,TRUE)->length(20);
                        $table->string('name', 100);
                        $table->integer('city_id',FALSE,TRUE)->length(20);
                        $table->string('mobilenumber', 100);
                        $table->string('email', 100);
                        $table->integer('purchase_month',FALSE,TRUE)->length(20);
                        $table->integer('purchase_year',FALSE,TRUE)->length(20);
                        $table->string('registrationnumber', 100);
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
		Schema::drop('insuranceenquiry_details');
	}

}
