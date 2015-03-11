<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDimensionsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('dimensions', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('variant_id', FALSE, TRUE)->length(20);
            $table->float('length');
            $table->float('width');
            $table->float('height');
            $table->float('wheelbase');
            $table->float('bootspace');
            $table->float('kerbweight');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('dimensions');
    }

}
