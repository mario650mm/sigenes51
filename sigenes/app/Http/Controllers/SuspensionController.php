<?php

namespace App\Http\Controllers;

use App\Suspension;
use App\Partner;
use App\Period;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Mockery\CountValidator\Exception;

class SuspensionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('templates.admin.low.consultSuspension');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllData()
    {
        return Suspension::all();
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllDataPeriod()
    {
        return Period::all();
    }

    public function getStudentData($id){
       
        $user = User::find(Auth::user()->id);
        $user->Partner->Student;
        return  $user->Partner;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllDataPart()
    {
        return Partner::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //dd('hola');
        return view('templates.student.low.createSuspensions');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!is_array($request->all())) {
            return ['error' => 'request must be an array'];
        }

        $rules = [  
            'student_id'    =>  'required',
            'period_id'     =>  'required',
            'status_id'     =>  'required',
            'reason'        =>  'required',
            'date_init'     =>  'required'
        ];

        try{
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return [
                    'created' => false,
                    'errors'  => $validator->errors()->all()
                ];
            }

            Suspension::create($request->all());
            return ['created' => true];
        }catch (Exception $e){
            \Log::info('Error creating user: '.$e);
            return \Response::json(['created' => false], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return Suspension::findOrFail($id);
        return Suspension::where('student_id', '=', $id)->firstOrFail();
    }


    public function showAll(){
        $result = \DB::table('suspensions')
            ->select([
                "suspensions.id", "suspensions.student_id as student", 
                "students.account_number", "periods.month_init", 
                "periods.month_end", "periods.year",
                "status.name as estatus", "suspensions.reason", 
                "suspensions.date_init", "suspensions.period_id", 
                "partners.name", "partners.firstlastname", 
                "partners.secondlastname"
                ])
            ->leftJoin("students", "suspensions.student_id", "=", "students.id")
            ->leftJoin("periods", "periods.id", "=", "suspensions.period_id")
            ->leftJoin("status", "status.id", "=", "suspensions.status_id")
            ->leftJoin("partners", "partners.id", "=", "students.partner_id")
            ->where("suspensions.status_id", "<>", 1)
            ->get();

            foreach ($result as $value) {
                $value->fullname = $value->name . ' ' . $value->firstlastname . ' ' . $value->secondlastname;
                $value->name_period = $value->month_init . ' - ' . $value->month_end . ' '. $value->year;
            }

        return $result;
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('templates.users.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       // dd($request);
        $suspension = Suspension::find($request->input('id'));
        $suspension->update($request->all());
        return ['updated' => true];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Suspension::destroy($id);
        return ['deleted' => true];
    }
}
