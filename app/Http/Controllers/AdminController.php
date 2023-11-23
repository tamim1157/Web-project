<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    
        public function showUserMessages()
        {
            $userMessages = DB::table('usermsg')->get();
            return view('usermsg', compact('userMessages'));
        }
    

    public function showAllStudentData()
    {
        $studentData = DB::table('stddata')->get();
        return view('allstddata', compact('studentData'));
    }


    // public function editmark($id)
    // {
    //     $row = DB::table('stddata')->where('id', $id)->first();
    //     $data = DB::table('insertmark')->where('rollno', $row->rollno)->first();

    //     return $row;

    //     return view('updatemarkf', compact('row', 'data'));
    // }

    public function updatemarkf($id){
      
        $row = DB::table('stddata')->where('id', $id)->first();
        $data = DB::table('insertmark')->where('rollno', $row->rollno)->first();

        // echo "<pre>";
        // print_r($data);
        // die();
        return view('updatemarkf', compact('row', 'data'));
    }

    public function updateMarkData(Request $request)
    {
        $rollno = $request->input('rollno');
        // Update the marks in the database based on the form submission

        
        DB::table('insertmark')->where('rollno', $rollno)->update([
            'bangla1' => $request->input('bangla1'),
            'english1' => $request->input('english1'),
            'math1' => $request->input('math1'),
            'physics1' => $request->input('physics1'),
            'chemistry1' => $request->input('chemistry1'),
            'bangla2' => $request->input('bangla2'),
            'english2' => $request->input('english2'),
            'math2' => $request->input('math2'),
            'physics2' => $request->input('physics2'),
            'chemistry2' => $request->input('chemistry2'),
            // Add other subjects and marks here
        ]);

        return redirect()->back()->with('success', 'Marks updated successfully');
    }



    public function deleteStudentMark($id)
    {
        $delete = DB::table('insertmark')->where('rollno', $id)->delete();

        if ($delete > 0) {
            return redirect()->back()->with('success', 'Student mark deleted successfully.');
        }

        return redirect()->back()->with('error', 'Student mark not found.');
    }

    public function showResult(Request $request){

        $roll = $request->input('rollno');
        $classs = $request->input('class');

       $result =  DB::table('insertmark')->where('rollno', $roll)->first();
      
       $data =  DB::table('stddata')->where('rollno', $roll)->first();


  
       return view('result', compact('data','result'));

    }
    
    

}
