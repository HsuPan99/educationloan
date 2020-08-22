<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Student_Info extends Model
{
    protected $fillable = [
        'name','photo','fathername','nrcno','state','city','phoneno','user_id'
    ];
    public function education($value='')
    {
    	return $this->hasOne('App\Education_Detail');
    }
    public function financial($value='')
    {
    	return $this->hasOne('App\Financial_Info');
    }
}
