<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Career extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'careers';


    protected $fillable=['father_campus', 'key', 'name', 'description', 'study_plan_id'];

    public function Area(){
        return $this->hasMany('App\StudyArea');
    }

    public function Student(){
        return $this->hasMany('App\Student');
    }
}
