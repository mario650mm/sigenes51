<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AttachmentType extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table='attachment_types';

    protected $fillable=[];
}
