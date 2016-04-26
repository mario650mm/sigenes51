<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Career;
use Illuminate\Support\Facades\Validator;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('templates.admin.careers.index');
    }

    public function getNameCareer($id){
        return Career::findOrFail($id)->name;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('templates.admin.careers.create');
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
            'key'          =>  'required',
            'name'         =>  'required',
            'description'  =>  'required'
        ];

        try{
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return \Response::json(['created' => false,'errors' => $validator->errors()->all()], 500);
            }

            $careers = Career::create($request->all());
            return \Response::json(['created' => true, 'career_id' => $careers->id], 200);
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
        return Career::all();
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
            'campus'       =>  'required',
            'key'          =>  'required',
            'name'         =>  'required',
            'description'  =>  'required'
        ];

        try{

            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return \Response::json(['updated' => false,'errors' => $validator->errors()->all()], 500);
            }

            $careers = Career::find($request->input('id'));
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
        try{
            $carrera = Career::findOrFail($id);
            //dd($carrera->Area->lists('id'));
            $carrera->Area()->delete();
            Career::destroy($id);
            return ['deleted' => true];
        }catch (Exception $e){
            \Log::info('Error deleting Career: '.$e);
            return \Response::json(['deleted' => false], 500);
        }
    }
}
