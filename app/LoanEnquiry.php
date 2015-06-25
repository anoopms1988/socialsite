<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class LoanEnquiry extends Model
{
    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'loan_enquiries';
    public $timestamps = false;
    
    /**
     * one to many relationship b/w variant and loan enquiries
     * @return null
     */
    public function variant() {
        return $this->belongsTo('App\Variant');
    }
    
    /**
     * one to many relationship b/w cartype and loan enquiries
     * @return null
     */
    public function carType() {
        return $this->belongsTo('App\Variant');
    }
}
