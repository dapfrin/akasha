<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    use RegistersUsers;

    // Redirect setelah registrasi sukses
    protected $redirectTo = '/login';

    public function __construct()
    {
        $this->middleware('guest');
    }

    // Menampilkan form registrasi
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Validator untuk registrasi
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => 'required|string|max:255|unique:user',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    // Proses registrasi
    protected function create(array $data)
    {
        return User::create([
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
            'role' => 'user', // Sesuaikan dengan kebutuhan Anda
        ]);
    }
}
