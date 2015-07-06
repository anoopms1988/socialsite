<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Dealer extends Model
{
    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table      = 'dealers';
    public $timestamps = false;

    public function company()
    {
    	return $this->belongsTo('App\Company');
    }
}
