<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Steering extends Model
{
    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'steering_details';
    public $timestamps = false;

     /**
     * Each steering mechanism belongs to a variant
     *
     */
    public function variant() {
        return $this->belongsTo('App\Variant');
    }
    
    
    
}
