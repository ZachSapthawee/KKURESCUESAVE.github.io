<?php

namespace App\Http\Controllers;

use App\Personal_table;
use App\Faculty;
use DB;


use Illuminate\Http\Request;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $faculty_list = DB::table('faculties')->get();
        // return response()->json($faculty_list);
        // return view('user.create')->with('faculty_list', $faculty_list);
        return view('pages.index');
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        // return response()->json($request);
            $this->validate($request, [
                'fristname' => 'required|string',
                'lastname' => 'required|string',
                'nickname' => 'required|string',
                'age' => 'required|integer',
                'gender' => 'required|string',
                'idcard' => 'required|string',
                'weight' => 'required|integer',
                'height' => 'required|integer',
                'tel' => 'required|string',

        ]);
        // store
            $personal = new Personal_table;
            $personal->firstname = $request->fristname;
            $personal->lastname = $request->lastname;
            $personal->nickname = $request->nickname;
            $personal->age = $request->age;
            $personal->gender = $request->gender;
            $personal->idcard = $request->idcard;
            $personal->weight = $request->weight;
            $personal->height = $request->height;
            $personal->tel = $request->tel;

                // return response()->json($personal);
            $personal->save();
            // redirect
            return redirect('/user')->with('success', 'Successfully created personal!');
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

    public function getFaculty(){
        $faculty_list = DB::table('faculties')->get();
        return response()->json($faculty_list);
        // return view('user.index')->with('faculty_list', $faculty_list);
    }
}
