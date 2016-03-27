<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\StudyArea;
use Illuminate\Support\Facades\Validator;

class StudyareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'career_id'    =>  'required',
            'key'          =>  'required',
            'name'         =>  'required'
        ];

        try{
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return \Response::json(['created' => false,'errors' => $validator->errors()->all()], 500);
            }

            $area = StudyArea::create($request->all());
            return \Response::json(['area_id' => $area->id, 'name' => $area->name], 200);
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
        return StudyArea::all();
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
        if (!is_array($request->all())) {
            return ['error' => 'request must be an array'];
        }

        $rules = [  
            'career_id'    =>  'required',
            'key'          =>  'required',
            'name'         =>  'required'
        ];

        try{

            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return \Response::json(['updated' => false,'errors' => $validator->errors()->all()], 500);
            }

            $careers = StudyArea::find($request->input('id'));
            $careers->update($request->all());
            return ['updated' => true];
        }catch (Exception $e){
            \Log::info('Error updating Career: '.$e);
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
        StudyArea::destroy($id);
        return ['deleted' => true];
    }
}
