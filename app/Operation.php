<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    public function products(){
    	return $this->belongsToMany(Product::class)->withPivot('quantity','unit_price');
    }
}
