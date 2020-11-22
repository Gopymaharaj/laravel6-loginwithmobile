<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Student extends Model
{
    //
    public function setNameAttribute($value){
        return $this->attributes['name']= Str::ucfirst($value);
    }
    public function setEmailAttribute($value){
        return $this->attributes['email']= Str::upper($value);
    }
}
