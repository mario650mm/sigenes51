<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Partner extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table='partners';

    protected $fillable=['name', 'firstlastname', 'secondlastname', 'telephone', 'celphone'];



    public function Student(){
        return $this->hasOne('App\Student');
    }

    public function User(){
        return $this->belongsTo('App\User');
    }

    public function Teacher(){
        return $this->hasOne('App\Teacher');
    }

    public function Employee(){
        return $this->hasOne('App\Employee');
    }



}
