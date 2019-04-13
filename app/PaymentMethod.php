<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    protected $fillable=[
    	'bankName',
    	'cardNumber',
    	'cvv',
    	'month',
    	'year',
    ];

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
