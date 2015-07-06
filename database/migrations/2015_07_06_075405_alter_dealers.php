<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterDealers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('dealers', function(Blueprint $table)
		{
			$table->string('facebook_link', 50);
			$table->string('twitter_link', 50);
			$table->string('linkedin_link', 50);
			$table->string('google_link', 50);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('dealers', function(Blueprint $table)
		{
			//
		});
	}

}
