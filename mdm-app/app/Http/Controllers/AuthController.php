<?php


namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    // Register user
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'is_admin' => 'required|in:0,1', // Validate role selection
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_admin' => $request->is_admin == 1 ? true : false, // Store correct role
        ]);

        auth()->login($user); // Automatically log in after registration

        return redirect()->route('login'); // Redirect to dashboard after registration
    }

























//    public function login(Request $request)
//    {
//        $credentials = $request->only('email', 'password');
//
//        // Attempt to authenticate the user
//        if (!$token = auth()->attempt($credentials)) {
//            return response()->json(['error' => 'Unauthorized'], 401);
//        }
//
//        // Redirect to the /dashbord URL
//        return redirect('/dashbord'); // Directly redirect to the dashboard
//    }



    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Attempt to authenticate the user
        if (!$token = auth()->attempt($credentials)) {
            // Redirect to the registration page if authentication fails
            return redirect()->route('register')->with('error', 'Invalid credentials, please register.');
        }

        // Redirect to the dashboard after successful login
        return redirect('/dashbord');
    }








    // Logout user
    public function logout()
    {
        JWTAuth::invalidate(JWTAuth::getToken());
        return response()->json(['message' => 'Successfully logged out']);
    }

    // Refresh Token
    public function refresh()
    {
        return response()->json([
            'token' => JWTAuth::refresh()
        ]);
    }

    public function me()
    {
        return response()->json(auth()->user()); // Returns user info if authenticated
    }

}


