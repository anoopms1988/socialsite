<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Capacity extends Model
{
    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'capacity';
    public $timestamps = false;

    /**
     * Each capcity type belongs to a variant
     *
     */
    public function variant() {
        return $this->belongsTo('App\Variant');
    }
}
