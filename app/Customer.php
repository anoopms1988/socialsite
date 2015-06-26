<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'customers';
    public $timestamps = false;
    
    /**
     *Each customer has more than one review
     *
     */
    public function review() {
        return $this->hasMany('App\Review');
    }
    
    /**
     * Each customer has more than one loan enquiry
     * @return  null
     */
    public function loanEnquiry() {
        return $this->hasMany('App\LoanEnquiry');
    }
}
