<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Brake extends Model
{
    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'brakes';
    public $timestamps = false;
    
    /**
     * Each brake belongs to a variant
     *
     */
    public function variant() {
        return $this->belongsTo('App\Variant');
    }
}
