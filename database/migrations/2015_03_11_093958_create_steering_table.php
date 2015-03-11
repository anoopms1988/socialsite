<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSteeringTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('steering_details', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('variant_id', FALSE, TRUE)->length(20);
            $table->float('turning_radius');
            $table->string('steering_type', 100);
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
        Schema::drop('steering_details');
    }

}
