<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    use SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'teachers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['noCuenta', 'email'];

}
