<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suspension;
use App\Partner;
use App\Period;
use App\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PdfSuspensionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //exit('fin');
        $data = $this->show();

        $view =  \View::make('templates.student.low.pdf.pdfsuspension', compact('data'))->render();


        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('templates.student.low.pdf.pdfsuspension');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //$user = User::find(Auth::user()->id);
        //$user->Partner->Student;
        //$user->Partner;
        //return Suspension::where('student_id', '=', Auth::user()->id)->firstOrFail();
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
                "partners.cellphone",
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
                    'celphone' => $value->cellphone,
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
