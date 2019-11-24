<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SelectFacultyController extends Controller
{
    function index(){
        $faculty_list = DB::table('faculties')->get();
        // return response()->json($faculty_list);
        return view('user.create')->with('faculty_list', $faculty_list);
    }

    function fetch(Request $request){
        $id=$request->get('select');
        $result=array();
        $query=DB::table('faculties')
            ->join('majors','faculties.Fac_id','=','majors.majors_id')
            ->select('majors.name')
            ->where('faculties.Fac_id',$id)
            ->groupBy('majors.name')
            ->get();

            $output='<option value="">เลือกสาขาของผู้ป่วย</option>';
                foreach ($query as $row) {
                    $output.='<option value="'.$row->name.'">'.$row->name.'</option>';
                }
                echo $output;
    }
}
