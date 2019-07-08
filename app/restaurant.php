<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class restaurant extends Model
{
    protected $table='restaurant';
    protected $fillable = [
        'name','logo','openingtime','closingtime','addressid','foods'
    ];
}
