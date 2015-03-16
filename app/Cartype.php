<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cartype extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cartype';
    public $timestamps = false;
    
    /**
     * Inverse of each car has a type
     *
     */
    public function car()
    {
        return $this->hasMany('App\Car','type_id');
    }
}
