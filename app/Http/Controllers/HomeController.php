<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
   public function register(Request $request)
    {
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->role = $request->input('role');
        $user->save();

        Session::flash('success', 'Registration successful.');
        return redirect('/slogin');
    }

   public function login(Request $request)
    {
        $users = User::all();

        $email = $request->input('email');
        $password = $request->input('password');

        foreach ($users as $user) {
            if ($user->email === $email && $user->password === $password) {
                if ($user->role === 'student') {
                    Session::flash('success', 'Login successful.');
                    return redirect('/indexr');
                } elseif ($user->role === 'admin') {
                    Session::flash('success', 'Login successful.');
                    return redirect('/admindash');
                }
            }
        }

        Session::flash('error', 'Email or password is incorrect.');
        return redirect()->back();
    }
}
