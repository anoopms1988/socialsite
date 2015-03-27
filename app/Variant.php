<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Variant extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'variants';
    public $timestamps = false;

    /**
     * Each car has a company
     *
     */
    public function car() {
        return $this->belongsTo('App\Car', 'car_id');
    }

    /**
     * Each variant has many reviews
     *
     */
    public function review() {
        return $this->hasMany('App\Review');
    }

}
