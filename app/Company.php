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
    
     /**
     * Each company has a assistance details
     *
     */
    public function assistance()
    {     
        return $this->hasOne('App\Assistance');
    }

    /*
     * Each company have many dealers
     */
    public function dealer()
    {     
        return $this->hasMany('App\Dealer');
    }

}
