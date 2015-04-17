<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class FuelEfficiency extends Model
{
    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'fuelefficiency_details';
    public $timestamps = false;



    /**
     * Each variant has fuel efficiency details
     *
     */
    public function variant() {
        return $this->belongsTo('App\Variant');
    }
}
