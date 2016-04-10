<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table='students';

    protected $fillable=[];

    public function Suspension(){
    	return $this->hasMany('App\Suspension');
    }

    public function Partner(){
    	return $this->belongsTo('App\Partner');
    }

    public function ExtraordinaryTest(){
        return $this->belongsTo('App\ExtraordinaryTest');
    }
    public function Schoolrecord(){
        return $this->hasMany('App\Schoolrecord');
    }
    public function Career(){
        return $this->belongsTo('App\Career');   
    }
}
