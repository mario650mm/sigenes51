<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AttachmentApplicants extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table='attachment_applicants';

    protected $fillable=['applicant_id', 'attachment_type_id', 'document'];

    public function applicant(){
        return $this->belongsTo('App\Applicant');
    }
}
