<?php

namespace App\Http\Controllers;

use App\Partner;
use App\Teacher;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('templates.admin.teachers.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllData()
    {
        $teacher = Teacher::join('partners','partners.id','=','teachers.partner_id')
            //->join('employees','employees.partner_id','=','partners.id')
            ->select('partners.name','partners.firstlastname','partners.curp',
                'partners.email1','partners.email2','teachers.type')
            ->get();
        return $teacher;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('templates.admin.teachers.create');
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
            'type'     => 'required',
        ];

        try{
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return \Response::json(['created' => false,'errors'  => $validator->errors()->all()], 500);
            }
            Teacher::create($request->all());
            return ['created' => true];
        }catch (Exception $e){
            \Log::info('Error creating teacher: '.$e);
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
        return Teacher::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('templates.admin.teachers.partials.edit');
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
        $teacher = Teacher::find($request->input('id'));
        $teacher->update($request->all());
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
        $user = User::destroy($id);
        $partner = Partner::destroy($id);
        Teacher::destroy($id);
        return \Response::json(['deleted' => true,'user_id' => $user->id,'partner_id',$partner->id],500);
    }
}
