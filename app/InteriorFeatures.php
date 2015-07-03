<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class InteriorFeatures extends Model
{
    
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'interior_features';
    public $timestamps = false;

    public function variant()
    {
    	return $this->belongsTo('App\Variant' );
    }
    
    
}
