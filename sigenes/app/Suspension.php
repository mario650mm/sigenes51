<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Suspension extends Model
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
    protected $table = 'suspensions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['student_id', 'period_id', 'status_id', 'reason', 
    	'date_init', 'date_end', 'evidence', 'clinic', 'library', 'lab', 'social_services'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function Student(){
        return $this->belongsTo('App\Student');
    }

    public function DataPdf(){
        $date = getdate();
        $months = array(1 => 'Enero', 2 => 'Febrero', 3 => 'Marzo', 
            4 => 'Abril', 5 => 'Mayo', 6 => 'Junio', 7 => 'Julio', 8 => 'Agosto',
            9 => 'Septiembre', 10 => 'Octubre', 11 => 'Noviembre', 12 => 'Diciembre');
        
        $result = \DB::table('suspensions')
            ->select([
                "suspensions.id",
                "suspensions.student_id as student", 
                "students.account_number", 
                "periods.month_init", 
                "periods.month_end", 
                "periods.year",
                "status.name as estatus", 
                "suspensions.reason", 
                "suspensions.date_init", 
                "suspensions.period_id", 
                "partners.name", 
                "partners.firstlastname", 
                "partners.secondlastname",
                "partners.email1",
                "partners.telephone",
                "partners.celphone",
                "partners.secondlastname"
                ])
            ->join("students", "suspensions.student_id", "=", "students.id")
            ->join("periods", "periods.id", "=", "suspensions.period_id")
            ->join("status", "status.id", "=", "suspensions.status_id")
            ->join("partners", "partners.id", "=", "students.partner_id")
            ->join("users", "users.id", "=", "partners.user_id")
            ->where("users.id", "=", \Auth::user()->id)
            ->get();
            //dd($result);


            foreach ($result as $value) {
                if ($value->estatus ='Tramitado') {
                    # code...
                    $data = ['fullname' => $value->name . ' ' . $value->firstlastname . ' ' . $value->secondlastname,
                    'name_period' => $value->month_init . ' - ' . $value->month_end . ' '. $value->year,
                    'account_number' => $value->account_number,
                    'celphone' => $value->celphone,
                    'telephone' => $value->telephone,
                    'career' => 'Odontología',
                    'reason' => $value->reason,
                    'email' => $value->email1,
                    'actualdate'=> $date['mday'],
                    'actualyear'=> $date['year'],
                    'month' => $months[$date['mon']],
                    'date_init' => $value->date_init
                    ];
                }
            }

        return $data;
    }
}
