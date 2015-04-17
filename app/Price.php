<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'price_details';
    public $timestamps = false;
    
    /**
     * Each variant has price details
     *
     */
    public function variant() {
        return $this->belongsTo('App\Variant');
    }
}
