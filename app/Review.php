<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'reviews';
    public $timestamps = false;

    /**
     * Review by each customer
     *
     */
    public function customer() {
        return $this->belongsTo('App\Customer');
    }
    
    /**
     * Review for each variant
     *
     */
    public function variant() {
        return $this->belongsTo('App\Variant');
    }

}
