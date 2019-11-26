<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\faculties;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/index');
    }

    public function FormFacListShow()
    {
        $faculty_list = DB::table('faculties')->get()
            ->groupBy('Faculty')
            ->get();
        return view('create')->with('faculty_list', $faculty_list);

        // $faculty = Request::old('faculties');
        // $faculty = faculties::all();
        // $selectedID = 2;  
        // return view('user.create', compact( 'Faculty'));
    }

}
