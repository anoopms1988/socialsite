<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Dimension extends Model
{
    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'dimensions';
    public $timestamps = false;


    /**
     * Each wheel type belongs to a variant
     *
     */
    public function variant() {
        return $this->belongsTo('App\Variant');
    }
}
