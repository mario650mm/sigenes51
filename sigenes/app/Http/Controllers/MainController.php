<?php

namespace App\Http\Controllers;

use App\Year;
use App\StudiesPlan;
use App\SubjectMatter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Half_year;
use App\User;
use App\Suspension;

class MainController extends Controller
{
    /**
     * Show the half_year data.
     *
     * @return \Illuminate\Http\Response
     */
    public function show_half_year()
    {
        return Half_year::all();
    }

    /**
     * This funciton return all years
     *
     * @return \Illuminate\Http\Response
     */
    public function show_years(){

        return Year::all();
    }

    public function show_studies_plan(){
        return StudiesPlan::all();
    }

    public function show_career(){
        return SubjectMatter::all();
    }

    public function get_student(){
        //dd(Auth::user()->id);
        $user = User::find(Auth::user()->id);
        $user->Partner->Student;
        return  $user->Partner;
    }

    public function validation_suspention(){
        $suspension = User::find(Auth::user()->id);
        $suspension->Partner->Student;
        $suspension->Partner->Student->Suspension;
        //$suspension->Partner->Student->Suspension->Period;
        return $suspension; 

    }

}
