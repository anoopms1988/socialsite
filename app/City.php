<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table      = 'cities';
    public $timestamps = false;
}
