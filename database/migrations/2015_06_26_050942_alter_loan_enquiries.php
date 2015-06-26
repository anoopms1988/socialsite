<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterLoanEnquiries extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('loan_enquiries', function(Blueprint $table)
		{
			$table->integer('loan_year');
			$table->float('loan_amount');
			$table->float('loan_interest');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('loan_enquiries', function(Blueprint $table)
		{
			//
		});
	}

}
