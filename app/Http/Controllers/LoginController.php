<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class LoginController extends Controller
{
    // Method to show the login form
    public function showLoginForm()
    {
        // dd('Login form method called'); 
        // return view('auth.showLoginForm');
    }

    // Method to handle the login logic
    public function login(Request $request)
    {
        // Validate the request...
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to log the user in
        if (Auth::attempt($request->only('email', 'password'))) {
            // Redirect to intended page
            return redirect()->intended('posts.index'); // Adjust this to your desired redirect
        }

        // If login fails, redirect back with an error
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    // Method to handle user logout
    public function logout(Request $request)
    {
        Auth::guard('web')->logout(); // Log out the user
        $request->session()->invalidate(); // Invalidate the session
        $request->session()->regenerateToken(); // Regenerate the CSRF token

        return to_route('posts.index'); // Redirect to posts index
    }
}
