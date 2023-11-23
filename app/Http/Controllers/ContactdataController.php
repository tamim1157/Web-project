<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ContactdataController extends Controller
{
    public function storedata()
    {
        return view('contact');
    }

    public function contactdata(Request $request)
    {
        // Validate the input
       /* $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'contact' => 'required',
            'message' => 'required',
        ]);*/

        // Insert data into the 'usermsg' table
        DB::table('usermsg')->insert([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'contact' => $request->input('contact'),
            'message' => $request->input('message'),
        ]);

        return redirect()->route('contactdata')->with('message', 'Data inserted successfully');
    }
}
