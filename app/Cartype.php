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
    public function car() {
        return $this->hasMany('App\Car', 'type_id');
    }
    
    /**
     * each cartype has one to many loan enquiries
     * @return null
     */
    public function loanEnquiry() {
        return $this->hasMany('App\LoanEnquiry');  
    }
}
