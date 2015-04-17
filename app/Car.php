<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cars';
    public $timestamps = false;

    /**
     * Each car has a company
     *
     */
    public function company() {
        return $this->belongsTo('App\Company');
    }

    /**
     * Each car has a type
     *
     */
    public function carType() {
        return $this->belongsTo('App\Cartype', 'type_id');
    }

    public function variant() {
        return $this->hasMany('App\Variant', 'car_id');
    }
    
    
    
}
