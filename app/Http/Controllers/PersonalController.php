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
        $faculty_list = DB::table('faculties')->get();
        $major_list = DB::table('majors')->get();
    //    dd($major_list);
        $data=array('personal_list'=>$personal_list,
        'faculties'=>$faculty_list,'majors'=>$major_list);
        return View('edit',$data);
            // dd($major_list);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_Personal(Request $request)
    {
       
    //     // return response()->json($request);
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
        $id = $request->input('id');
        $data = array('firstname' => $request->input('firstname'),
        'lastname' => $request->input('lastname'),
        'nickname' => $request->input('nickname'),
        'age' => $request->input('age'),
        'gender' => $request->input('gender'),
        'idcard' => $request->input('idcard'),
        'weight' => $request->input('weight'),
        'height' => $request->input('height'),
        'tel' => $request->input('tel'),
        'Faculty' => $request->input('Faculty'),
        'major' => $request->input('major'),
        'detailreport' => $request->input('detailreport'),
        'historytaking' => $request->input('historytaking'),
        'disease' => $request->input('disease'),
        'drugallergy' => $request->input('drugallergy'));
        // dd($data);       
         DB::table('personal_tables')->where('id',$id)
        ->update($data);
        
    //     // $personal->id_user = $request->id_user;
        

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
