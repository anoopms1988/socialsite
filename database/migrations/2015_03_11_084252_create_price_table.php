<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePriceTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('price_details', function(Blueprint $table) {
            $table->increments('id');
            $table->string('showroomprice', 100);
            $table->string('onroadprice', 100);
            $table->integer('variant_id', FALSE, TRUE)->length(20);
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
        Schema::drop('price_details');
    }

}
