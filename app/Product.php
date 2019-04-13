<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=[
    	'description',
    	'price'
    ];

    public function label(){
    	return $this->belongsTo('App\Label');
    }
}
