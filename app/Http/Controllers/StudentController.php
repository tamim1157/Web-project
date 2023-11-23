<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;



class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('addmark');
    }

    public function create(Request $request)
    {
        $imagePath = 0; // Initialize the variable to store the image path

        // Handle the image upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = time().$file->getClientOriginalName();
            $file->move('uploads/images/', $name);
            $imagePath = asset('uploads/images/'.$name);
        }

        // Insert data into the 'stddata' table
        DB::table('stddata')->insert([
            'name' => $request->input('name'),
            'class' => $request->input('class'),
            'rollno' => $request->input('rollno'),
            'father' => $request->input('father'),
            'mother' => $request->input('mother'),
            'mobile' => $request->input('mobile'),
            'village' => $request->input('village'),
            'image' => $imagePath,
        ]);

        return redirect()->route('create')->with('message', 'Data inserted successfully');
    }

    // ... (Other methods)

    public function search(Request $request){

        $class = $request->input('class');
        $roll = $request->input('rollno');

        $studentData = DB::table('stddata')->where('class', $class)->where('rollno', $roll)->first();


        return  view('updatemark', compact('studentData'));
    }



    public function deletedata(Request $request){

        $class = $request->input('class');
        $roll = $request->input('rollno');

        $studentData = DB::table('stddata')->where('class', $class)->where('rollno', $roll)->get();

        return  view('deleteform', compact('studentData'));
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
 



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


   // use App\Models\Student;

/*public function showForm($studentId)
{
    $student = Student::find($studentId);

    return view('update', compact('student'));
}*/


public function editForm($studentId)
{
    $student = Student::findOrFail($studentId);
    return view('update', compact('student'));
}



public function updateForm(Request $request, $studentId)
{
    $student = Student::find($studentId);
    $student->class = $request->input('class');
    $student->rollno= $request->input('rollno');

    // Update the exam marks based on the submitted form data
    $student->bangla1 = $request->input('bangla1');
    $student->english1 = $request->input('english1');
    $student->math1 = $request->input('math1');
    $student->physics1 = $request->input('physics1');
    $student->chemistry1 = $request->input('chemistry1');
    $student->bangla2 = $request->input('bangla2');
    $student->english2 = $request->input('english2');
    $student->math2 = $request->input('math2');
    $student->physics2 = $request->input('physics2');
    $student->chemistry2 = $request->input('chemistry2');

    // Save the updated data to the database
    $student->save();

    // Redirect back to the form with a success message
    return redirect()->route('show-form', ['studentId' => $studentId])->with('success', 'Exam marks updated successfully.');
}



public function deleteMark($studentId)
{
    $student = Student::find($studentId);

    if (!$student) {
        return redirect()->route('deleteform')->with('error', 'Student not found.');
    }

    // Perform the deletion
    $student->delete();

    return redirect()->url('deleteform')->with('success', 'Mark deleted successfully.');
}



}