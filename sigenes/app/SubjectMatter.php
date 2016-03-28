<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubjectMatter extends Model
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
    protected $table = 'subject_matters';


    protected $fillable = [
        'key', 'name', 'semester_id', 'career_id', 'isasmandatory',
        'isasopctional', 'isasopctionaltrans', 'issermandatory',
        'isserindicative', 'istechnique', 'study_area_id', 'year_id', 'week_init',
        'week_end', 'week_total', 'hours_teoric', 'hours_practique', 'hours_clinic',
        'hours_total', 'credit'
    ];
}