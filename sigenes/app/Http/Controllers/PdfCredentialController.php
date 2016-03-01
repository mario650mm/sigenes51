<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PdfCredentialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->show();
        $view =  \View::make('templates.student.schoolrecords.pdf.pdfcredential', compact('data'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('templates.student.schoolrecords.pdf.pdfcredential'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $date = getdate();
        $months = array(1 => 'Enero', 2 => 'Febrero', 3 => 'Marzo', 
            4 => 'Abril', 5 => 'Mayo', 6 => 'Junio', 7 => 'Julio', 8 => 'Agosto',
            9 => 'Septiembre', 10 => 'Octubre', 11 => 'Noviembre', 12 => 'Diciembre');

        $result = \DB::table('transact_students')
            ->select([
                "transact_students.folio", 
                "students.account_number", 
                "partners.name", 
                "partners.firstlastname", 
                "partners.secondlastname",
                "partners.email1",
                "partners.telephone",
                "partners.celphone",
                "partners.secondlastname"
                ])
            ->join("students", "transact_students.student_id", "=", "students.id")
            ->join("partners", "partners.id", "=", "students.partner_id")
            ->join("users", "users.id", "=", "partners.user_id")
            ->where("users.id", "=", \Auth::user()->id)
            ->get();

            foreach ($result as $value) {
                if ($value->estatus ='Tramitado') {
                    # code...
                    $data = [
                    'fullname' => $value->name . ' ' . $value->firstlastname . ' ' . $value->secondlastname,
                    'account_number' => $value->account_number,
                    'celphone' => $value->celphone,
                    'telephone' => $value->telephone,
                    'career' => 'Odontología',
                    'folio' => $value->folio,
                    'email' => $value->email1,
                    'actualdate'=> $date['mday'],
                    'actualyear'=> $date['year'],
                    'month' => $months[$date['mon']]
                    ];
                }
            }

        return $data;
    }


}
