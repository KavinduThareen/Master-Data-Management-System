<?php
//
//namespace App\Http\Controllers;
//
//use Illuminate\Http\Request;
//
//class AuthController extends Controller
//{
//    public function login()
//    {
//        return view("auth.login");
//    }
//}



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Show the login form
    public function login()
    {
        return view('auth.login'); // Blade view for login
    }




    // Authenticate user
    public function authenticate(Request $request)
    {
        // Validate the form data
        $credentials = $request->only('email', 'password');

        // Attempt login with the provided credentials
        if (Auth::attempt($credentials)) {
            // Authentication passed, redirect to dashboard or home
            return redirect()->intended('/dashboard');
        }

        // Authentication failed, back to the login form with an error
        return back()->withErrors([
            'email' => 'The provided credentials are incorrect.',
        ]);
    }



}
