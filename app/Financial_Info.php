<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Financial_Info extends Model
{
    protected $fillable = [
        'educationexp','accomodationexp','utilityexp','monthlyincome','student_id'
    ];
    public function student($value='')
    {
    	return $this->hasOne('App\Student_Info');
    }
    public function loan($value='')
    {
    	return $this->belongsTo('App\Loan');
    }
}
