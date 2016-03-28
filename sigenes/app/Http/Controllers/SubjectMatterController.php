<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\SubjectMatter;
use App\Half_year;
use App\Career;
use App\StudyArea;
use App\StudiesPlan;
use App\Year;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Mockery\CountValidator\Exception;

class SubjectMatterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //SubjectMatterController
        return view('templates.admin.subjectMatter.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('templates.admin.subjectMatter.create');
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
            'key'                   =>  'required', 
            'name'                  =>  'required', 
            'semester_id'           =>  'required', 
            'career_id'             =>  'required', 
            'isasmandatory'         =>  'required',
            'isasopctional'         =>  'required', 
            'isasopctionaltrans'    =>  'required',
            'issermandatory'        =>  'required',
            'isserindicative'       =>  'required', 
            'istechnique'           =>  'required',  
            'year_id'               =>  'required', 
            'week_init'             =>  'required',
            'week_end'              =>  'required',
            'hours_teoric'          =>  'required', 
            'hours_practique'       =>  'required', 
            'hours_total'           =>  'required', 
            'credit'                =>  'required'
        ];

        try{
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return \Response::json(['created' => false,'errors' => $validator->errors()->all()], 500);
            }

            SubjectMatter::create($request->all());
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
        $subjectMatter= SubjectMatter::all();
        $career = Career::all();
        $areas = StudyArea::all();
        $plan = StudiesPlan::all();

        return \Response::json(['subjectMatter' => $subjectMatter, 'career' => $career,
            'areas' => $areas, 'plan' => $plan], 200);
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
        if (!is_array($request->all())) {
            return ['error' => 'request must be an array'];
        }

        $rules = [ 
            'key'                   =>  'required', 
            'name'                  =>  'required', 
            'semester_id'           =>  'required', 
            'career_id'             =>  'required', 
            'isasmandatory'         =>  'required',
            'isasopctional'         =>  'required', 
            'isasopctionaltrans'    =>  'required',
            'issermandatory'        =>  'required',
            'isserindicative'       =>  'required', 
            'istechnique'           =>  'required',  
            'year_id'               =>  'required', 
            'week_init'             =>  'required',
            'week_end'              =>  'required',
            'hours_teoric'          =>  'required', 
            'hours_practique'       =>  'required', 
            'hours_total'           =>  'required', 
            'credit'                =>  'required'
        ];

        try{
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return \Response::json(['updated' => false,'errors' => $validator->errors()->all()], 500);
            }

            $subjectMatter = SubjectMatter::find($request->input('id'));
            $subjectMatter->update($request->all());
            return ['updated' => true];
        }catch (Exception $e){
            \Log::info('Error creating user: '.$e);
            return \Response::json(['updated' => false], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SubjectMatter::destroy($id);
        return ['deleted' => true];
    }
}
