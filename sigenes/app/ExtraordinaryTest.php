<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExtraordinaryTest extends Model
{
	use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table='extraodinary_tests';

    protected $fillable=['student_id', 'islegal', 'legal_subject_1','legal_subject_2',
    	'isapply','apply_subject_1','apply_subject_2','isoptional','optional_subject_1',
    	'optional_subject_2','optional_subject_3', 'date_registration','allow'];

    public function Student(){
        return $this->hasOne('App\Student');
    }

}
