<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Assistance extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'road_assistance';
    public $timestamps = false;
    
     public function company() {
        return $this->belongsTo('App\Company');
    }

}
