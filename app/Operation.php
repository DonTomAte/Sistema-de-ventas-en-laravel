<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    protected $fillable = [
        'type'
    ];
    public function products(){
    	return $this->belongsToMany(Product::class)->withPivot('id','quantity','unit_price')->withTimestamps();
    }
}
