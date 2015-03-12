<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cars';
    public $timestamps = false;

}
