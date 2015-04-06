<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Engine extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'engines';
    public $timestamps = false;
    
    /**
     * Each engine belongs to a variant
     *
     */
    public function variant() {
        return $this->belongsTo('App\Variant');
    }

}
