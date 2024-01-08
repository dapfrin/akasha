<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    // LoginController.php

    public function login(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('username', 'password');
    
        if (auth()->attempt($credentials)) {
            $userRole = auth()->user()->role;
    
            if ($userRole === 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif ($userRole === 'user') {
                return redirect()->route('home1');
            }
        }
    
        return redirect()->back()->withInput($request->only('username'))->withErrors([
            'username' => 'Invalid username or password',
        ]);
    }
}
