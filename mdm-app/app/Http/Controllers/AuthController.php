<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{


    // Show the login form
    public function login()
    {
        return view('auth.login');
    }

    // Handle login attempt
    public function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();

            if ($user->is_admin) {
                return redirect()->route('admin.dashbord');
            }
            return redirect()->route('dashbord');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    // Show the registration form
    public function register()
    {
        return view('auth.register');
    }








    // Handle user registration
    public function registerPost(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        // Save user data
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hash password before saving
            'is_admin' => false, // Default value for new users
        ]);

        // Automatically log in the user
        Auth::login($user);

        return redirect()->route('login')->with('success', 'Registration successful!');
    }




    // Logout
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}



