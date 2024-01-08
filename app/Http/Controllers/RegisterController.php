<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|unique:users',
            'password' => 'required|min:6',
        ]);

        $user = new User();
        $user->username = $request->input('username');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        // Other registration logic...

        return redirect()->route('login');
    }
}
