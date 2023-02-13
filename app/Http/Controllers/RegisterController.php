<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => ['required', 'unique:users', 'alpha_num', 'min:4', 'max:25'],
            'name' => ['required', 'string', 'min:5'],
            'email' => ['required', 'unique:users', 'email'],
            'password' => ['required', 'min:6'],
        ]);

        User::create([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->username),
        ]);

        return redirect('/');
    }
}
