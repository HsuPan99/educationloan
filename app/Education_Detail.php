<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education_Detail extends Model
{
    protected $fillable = [
        'rollno','university','year','semester','student_id'
    ];
    public function student($value='')
    {
    	return $this->hasOne('App\Student_Info');
    }
}
