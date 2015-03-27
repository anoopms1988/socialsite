<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'companies';
    public $timestamps = false;
    
     /**
     * Inverse of each car has a company
     *
     */
    public function car()
    {
        
        return $this->hasMany('App\Car');
    }

}
