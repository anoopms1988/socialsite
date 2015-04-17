<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    
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
    
    /**
     * Each variant has one type engine
     *
     */
    public function engine() {
        return $this->hasOne('App\Engine');
    }
    
    /**
     * Each variant has fuel efficiency details
     *
     */
    public function fuel() {
        return $this->hasOne('App\FuelEfficiency');
    }

      /**
     * Each variant has fuel price details
     *
     */
    public function price() {
        return $this->hasOne('App\Price');
    }

     /**
     * Each variant has steering mechanism details
     *
     */
    public function steering() {
        return $this->hasOne('App\Steering');
    }
}
