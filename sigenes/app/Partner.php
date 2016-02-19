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

    public function getStudentData($id){
        dd($id);
        $result = BD::table('partners')
            ->select(['partners.name', 'partners.firstlastname', 'partners.secondlastname', 
                'partners.telephone', 'partners.celphone', 'students.id as student', 'students.account_number'])
            ->where('partners.user_id', '=', $id)
            ->leftJoin('students', 'partners.id', '=', 'students.partner_id')
            ->get();

        return $result;
    }
}
