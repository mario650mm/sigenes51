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
}
