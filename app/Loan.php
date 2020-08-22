<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $fillable = [
        'amount','status','date','loantime','financial_id'
    ];
    public function financial($value='')
    {
    	return $this->hasMany('App\Financial_Info');
    }
    public function payment($value='')
    {
    	return $this->hasOne('App\Payment');
    }
    

}
