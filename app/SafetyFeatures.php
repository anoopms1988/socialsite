<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class SafetyFeatures extends Model
{
    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table      = 'safety_features';
    public $timestamps = false;
    
    public function variant()
    {
        return $this->belongsTo( 'App\Variant' );
    }
}
