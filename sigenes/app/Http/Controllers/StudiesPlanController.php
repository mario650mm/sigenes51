<?php

namespace App\Http\Controllers;

use App\StudiesPlan;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class StudiesPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('templates.admin.studieplans.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllData()
    {
        return StudiesPlan::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('templates.admin.studieplans.create');
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
            'name' => 'required',
            'key'  => 'required',
            'is_deepending' => 'required'
        ];


        try{
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return \Response::json(['created' => false,'errors'  => $validator->errors()->all()], 500);
            }
            School::create($request->all());
            return \Response::json(['created' => true], 200);
        }catch (Exception $e){
            \Log::info('Error creating studie plan: '.$e);
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
        return StudiesPlan::findOrFail($id);
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
        $studie_plan = StudiesPlan::find($request->input('id'));
        $studie_plan->update($request->all());
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
        StudiesPlan::destroy($id);
        return ['deleted' => true];
    }
}
