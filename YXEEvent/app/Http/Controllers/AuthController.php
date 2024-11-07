<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // Validate form data
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'your_email' => 'required|email|unique:users,email',
            'your_phone' => 'nullable|string|max:15',
            'your_pass' => 'required|string|min:6|confirmed', // Confirms with `your_pass_confirmation`
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Create new user
        User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->your_email,
            'phone' => $request->your_phone,
            'password' => Hash::make($request->your_pass),
        ]);

        // Redirect to the signin page with a success message
        return redirect()->route('signin')->with('success', 'Signup successful! Please sign in.');
    }

    public function login(Request $request)
    {
        // Validate login data
        $request->validate([
            'your_email' => 'required|email',
            'your_pass' => 'required|string',
        ]);

        // Attempt to log the user in
        $user = User::where('email', $request->your_email)->first();

        if ($user && Hash::check($request->your_pass, $user->password)) {
            // Log in the user
            Auth::login($user);

            // Redirect to the home page with a success message
            return redirect()->route('home')->with('success', 'You are logged in!');
        }

        // Redirect back with an error message if login fails
        return back()->withErrors([
            'your_email' => 'The provided credentials do not match our records.',
        ])->withInput();
    }

    // Optional: logout function
    public function logout()
    {
        Auth::logout();
        return redirect()->route('signin')->with('success', 'Logged out successfully!');
    }
}
