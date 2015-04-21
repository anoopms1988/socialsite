<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Wheel extends Model
{
    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'wheel_tyres';
    public $timestamps = false;
    
     /**
     * Each wheel type belongs to a variant
     *
     */
    public function variant() {
        return $this->belongsTo('App\Variant');
    }
    
}
