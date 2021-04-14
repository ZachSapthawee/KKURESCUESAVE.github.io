<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SelectFacultyController extends Controller
{
    function index(){
        $faculty_list = DB::table('faculties')->get();
        // return response()->json($faculty_list);
        return view('create')->with('faculty_list', $faculty_list);
    }

    function fetch(Request $request){
        $id = $request->get('select');
        $result=array();
        $query=DB::table('faculties')
            ->join('majors','faculties.Fac_id','=','majors.major_id')
            ->select('majors.name')
            ->where('faculties.Fac_id',$id)
            ->groupBy('majors.name')
            ->get();

            $output='<option value="">เลือกสาขา</option>';
                foreach ($query as $row) {
                    $output.='<option value="'.$row->name.'">'.$row->name.'</option>';
                }
            echo $output;
    }
}
function editshow(){
    $faculty_list = DB::table('faculties')->get();
    return view('edit')->with('faculty_list', $faculty_list);
}


