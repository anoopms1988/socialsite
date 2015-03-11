<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEditorialReview extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('editorial_reviews', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('variant_id', FALSE, TRUE)->length(20);
            $table->text('review');
            $table->enum('is_active', [0, 1]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('editorial_reviews');
    }

}
