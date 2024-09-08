<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('registration');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|unique:users',
            'name'     => 'required',
            'email'    => 'required|unique:users|email:rfc,dns',
            'password' => 'required'
        ]);

        $validated['password'] = Hash::make($validated['password']);
        User::create($validated);
        return redirect()->route('login')->with('success', 'Registration successful');
    }
}
