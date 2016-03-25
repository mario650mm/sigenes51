<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Half_year;

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

}
