<?php

namespace App\Http\Controllers;

use App\Applicant;
use App\AttachmentApplicants;
use App\Career;
use App\City;
use App\Country;
use App\State;
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
                'document' => $request->input('birth_certificate')['base64']]);

            // Insert high_school_certificate
            AttachmentApplicants::create(['applicant_id' => $applicant->id,
                'attachment_type_id' => 3,
                'document' => $request->input('high_school_certificate')['base64']]);

            // Insert curp_file
            AttachmentApplicants::create(['applicant_id' => $applicant->id,
                'attachment_type_id' => 4,
                'document' => $request->input('curp_file')['base64']]);

            return \Response::json(['created' => true, 'applicant_id' => $applicant->id], 200);
        }catch (Exception $e){
            \Log::info('Error creating user: '.$e);
            return \Response::json(['created' => false], 500);
        }
    }

    public function createPdfAdmission($id){
        $applicant = Applicant::find($id);
        $country = Country::find($applicant->country_id)->name;
        $state = State::find($applicant->state_id)->name;
        $city = City::find($applicant->city_id)->name;
        $career = Career::find($applicant->career_id)->name;
        $view =  \View::make('templates.admissions.pdf.admission', compact(
            'applicant', 'country', 'state', 'city', 'career'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('templates.admissions.pdf.admission');
    }
}
