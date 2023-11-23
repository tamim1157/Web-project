<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InsertmarkController extends Controller
{
    public function insertmark()
    {
        return view('secondstep');
    }

    public function show(Request $request)
    {
       
    
        // Insert data into the 'stddata' table
        DB::table('insertmark')->insert([
            
            'rollno' => $request->input('rollno'),
            'class' => $request->input('class'),
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
        ]);

        return redirect()->route('show')->with('message', 'Data inserted successfully');
    }
    /*public function insertmark(Request $request)
    {
        $students=new Updatemodel();
        $students->rollno=$request->input('rollno');
        
        $students->class= $request->input('class');
        $students->bangla1= $request->input('bangla1');
        $students->english1= $request->input('english1');
        $students->math1= $request->input('math1');
        $students->physics1= $request->input('physics1');
        $students->chemistry1= $request->input('chemistry1');
        $students->bangla2= $request->input('bangla2');
        $students->english2= $request->input('english2');
        $students->math2= $request->input('math2');
        $students->physics2= $request->input('physics2');
        $students->chemistry2= $request->input('chemistry2');

        $students->save();
        return redirect()->with('status', "Data inserted successfully");


    }*/
}
