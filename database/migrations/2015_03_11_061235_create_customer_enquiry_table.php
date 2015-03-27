<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerEnquiryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customer_enquiries', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->integer('enquiry_type_id',FALSE,TRUE)->length(20);
                        $table->integer('customer_id',FALSE,TRUE)->length(20);
                        $table->string('enquiry', 100);
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
		Schema::drop('customer_enquiries');
	}

}
