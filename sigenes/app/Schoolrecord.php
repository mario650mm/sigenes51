<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Schoolrecord extends Model
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
    protected $table = 'transact_students';


    protected $fillable=['record', 'credential', 'folio', 'transact_type_id', 
    'date', 'student_id','status_id', 'evidence', 'lab', 'clinic', 'social_services', 'library'];

    public function Student(){
        return $this->belongsTo('App\Student');
    }
}
