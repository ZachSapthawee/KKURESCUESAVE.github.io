<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ShowPatientController extends Controller
{
    public function index()
    {
        $personal_list = DB::table('personal_tables')->get();
        // return response()->json($personal_list);
        return view('show')->with('personal_list', $personal_list);
    }

}

