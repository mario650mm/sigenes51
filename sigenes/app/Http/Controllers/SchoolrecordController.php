<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schoolrecord;
use App\SchoolrecordType;
use App\Partner;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Mockery\CountValidator\Exception;

class SchoolrecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('templates.admin.school_records.viewRecords');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRecordType(){
       
        return SchoolrecordType::all();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getStudent(){

        $user = User::find(Auth::user()->id);
        $user->Partner->Student;
        return  $user->Partner;
    }    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('templates.student.schoolrecords.createRequestRecord');
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
            'student_id'        =>  'required',
            'folio'             =>  'required',
            'status_id'         =>  'required',
            'transact_type_id'  =>  'required',
            'date'              =>  'required'
        ];

        try{
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return [
                    'created' => false,
                    'errors'  => $validator->errors()->all()
                ];
            }

            Schoolrecord::create($request->all());
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
    public function show()
    {
        $result = \DB::table('transact_students')
            ->select([
                "transact_students.id", 
                "transact_students.student_id as student", 
                "transact_students.transact_type_id",
                "transact_students.record",
                "transact_students.credential",
                "transact_students.date", 
                "transact_students.folio", 
                "students.account_number", 
                "transact_types.name as transact",
                "status.name as estatus", 
                "partners.name", 
                "partners.firstlastname", 
                "partners.secondlastname"
                ])
            ->leftJoin("students", "transact_students.student_id", "=", "students.id")
            ->leftJoin("transact_types", "transact_types.id", "=", "transact_students.transact_type_id")
            ->leftJoin("status", "status.id", "=", "transact_students.status_id")
            ->leftJoin("partners", "partners.id", "=", "students.partner_id")
            ->where("transact_students.status_id", "<>", 1)
            ->get();

            foreach ($result as $value) {
                # code...
                $value->fullname = $value->name . ' ' . $value->firstlastname . ' ' . $value->secondlastname;
                if($value->record == 1){
                    $value->tramint = "Constancía";
                }else{
                    if($value->credential == 1)
                        $value->tramint = "Reposición";
                }
                //dd($value);
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
        //
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
        //dd($request);
        $schoolrecords = Schoolrecord::find($request->input('id'));
        $schoolrecords->update($request->all());
        return ['updated' => true];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        try{
            $schoolrecords = Schoolrecord::find($request->input('id'));
            $schoolrecords->update($request->all());
            Schoolrecord::destroy($request->input('id'));
            return ['deleted' => true];
        }catch(Exception $e){
            return ['deleted' => false];
        }
    }
}
