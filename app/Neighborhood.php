<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Neighborhood extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    
    public function city(){
        return $this->belongsTo(City::class);
    }
}
