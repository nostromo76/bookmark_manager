<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; // Import Hash
use Illuminate\Validation\Rules\Password;
use App\Models\User; // Import the User model

class RegisterController extends Controller
{
    // Method to show the registration form
    public function showRegistrationForm()
    {
        return view('auth.showRegistrationForm'); // Make sure this view file exists
    }

    // Method to handle the registration
    public function register(Request $request)
    {
        // Validate request
        $request->validate([
            'name' => 'required|string|min:3|max:30',
            'email' => 'required|email|unique:users,email',
            'password' => ['required', 'string', 'min:8', 'confirmed', Password::defaults()],
        ]);

        // Create new user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Optionally log in the user
        // auth()->login($user);

        // Redirect
        return to_route('posts.index');
    }
}
