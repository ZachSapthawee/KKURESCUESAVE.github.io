<?php

namespace App\Http\Controllers;

use App\Personal_table;
use App\Faculty;
use App\DetailSample;
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
        $personal_list = DB::table('personal_tables')->get();
        return view('pages.index')->with('personal_list', $personal_list);
        
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/pages/create ');
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
                'firstname' => 'required|string',
                'lastname' => 'required|string',
                'nickname' => 'required|string',
                'age' => 'required|integer',
                'gender' => 'required|string',
                'idcard' => 'required|string',
                'weight' => 'required|integer',
                'height' => 'required|integer',
                'tel' => 'required|string',
                'Faculty'=>'required|string',
                'major'=>'required|string',

                'detailreport' => 'required|string',
                'historytaking' => 'required|string',
                'disease' => 'required|string',
                'drugallergy' => 'required|string',
        ]);
        // store
            $personal = new Personal_table;
            $personal->firstname = $request->firstname;
            $personal->lastname = $request->lastname;
            $personal->nickname = $request->nickname;
            $personal->age = $request->age;
            $personal->gender = $request->gender;
            $personal->idcard = $request->idcard;
            $personal->weight = $request->weight;
            $personal->height = $request->height;
            $personal->tel = $request->tel;
            $personal->Faculty = $request->Faculty;
            $personal->major = $request->major;
            $personal->detailreport = $request->detailreport;
            $personal->historytaking = $request->historytaking;
            $personal->disease = $request->disease;
            $personal->drugallergy = $request->drugallergy;
            $personal->save();
            // dd($personal);
            // redirect
            // return response()->json($personal);
            return redirect('/pages')->with('success', 'Successfully created personal!');
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
        // get the blog
        $personal_list = Personal_table::findOrFail($id);
        // show the edit form and pass the blog
        return View('edit')
            ->with('personal_list', $personal_list);
            dd($personal_list);
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
    //     // return response()->json($request);
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
            'Faculty'=>'required|string',
            'major'=>'required|string',

            'detailreport' => 'required|string',
            'historytaking' => 'required|string',
            'disease' => 'required|string',
            'drugallergy' => 'required|string',
    ]);
    // store
        $personal = Personal_table::find($id);
        $personal->firstname = $request->input('fristname');
        $personal->lastname = $request->input('lastname');
        $personal->nickname = $request->input('nickname');
        $personal->age = $request->input('age');
        $personal->gender = $request->input('gender');
        $personal->idcard = $request->input('idcard');
        $personal->weight = $request->input('weight');
        $personal->height = $request->input('height');
        $personal->tel = $request->input('tel');
        $personal->Faculty = $request->input('Faculty');
        $personal->major = $request->input('major');
        $personal->detailreport = $request->input('detailreport');
        $personal->historytaking = $request->input('historytaking');
        $personal->disease = $request->input('disease');
        $personal->drugallergy = $request->input('drugallergy');
    //     // $personal->id_user = $request->id_user;
        dd($personal);
        $personal->save();

    //     // redirect
        return redirect('/show')->with('success', 'Successfully updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete
        $personal_list = Personal_table::findOrFail($id);
        $personal_list->delete();
		// redirect
		return redirect('show')->with('message', 'Successfully deleted the blog!');
    }


}
