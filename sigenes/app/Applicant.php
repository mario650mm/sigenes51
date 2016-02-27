<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Applicant extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table='applicants';

    protected $fillable=[
        'name', 'firstlastname', 'secondlastname', 'curp', 'rfc',
        'birthdate', 'sex', 'email', 'nationality', 'telephone',
        'celphone', 'nss', 'maritalstatus', 'street', 'num_int',
        'num_ext', 'colony', 'zip', 'country_id', 'state_id',
        'city_id', 'school_name', 'specialty', 'month_start', 'year_start',
        'month_end', 'year_end', 'average', 'career_id', 'observations',
    ];


}
