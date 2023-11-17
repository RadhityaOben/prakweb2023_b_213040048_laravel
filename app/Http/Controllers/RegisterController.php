<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session; // Add this line

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            "title" => "Register",
            "active" => "register"
        ]);
    }

    public function store(Request $request)
    {
        $validData = $request->validate([
            'name' => 'required|max:255|min:3',
            'username' => 'required|max:255|min:3|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:255'
        ]);

        $validData['password'] = Hash::make($validData['password']);

        User::create($validData);

        return redirect('/login')->with('success', 'Registration successful!');
    }
}
