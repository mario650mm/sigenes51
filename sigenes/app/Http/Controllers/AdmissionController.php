<?php

namespace App\Http\Controllers;

use App\Applicant;
use App\AttachmentApplicants;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('templates.admissions.index');
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
        try{

            $applicant = Applicant::create($request->all());

            // Insert official_identification
            AttachmentApplicants::create(['applicant_id' =>  $applicant->id,
            'attachment_type_id' => 1,
            'document' => $request->input('official_identification')['base64']]);

            // Insert birth_certificate
            AttachmentApplicants::create(['applicant_id' => $applicant->id,
                'attachment_type_id' => 2,
                'document' => $request->input('official_identification')['base64']]);

            // Insert high_school_certificate
            AttachmentApplicants::create(['applicant_id' => $applicant->id,
                'attachment_type_id' => 3,
                'document' => $request->input('official_identification')['base64']]);

            // Insert curp_file
            AttachmentApplicants::create(['applicant_id' => $applicant->id,
                'attachment_type_id' => 4,
                'document' => $request->input('official_identification')['base64']]);

            return \Response::json(['created' => true], 200);
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
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
