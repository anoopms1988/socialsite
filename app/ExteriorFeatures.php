<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class ExteriorFeatures extends Model
{
      
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'exterior_features';
    public $timestamps = false;

    public function variant()
    {
    	return $this->belongsTo('App\Variant' );
    }
      
}
