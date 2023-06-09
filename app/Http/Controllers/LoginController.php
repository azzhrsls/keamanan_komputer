<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Akun;

class LoginController extends Controller
{
    public function index(){
        return view('autentikasi.index');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
        'email' => ['required', 'email:dns'],
        'password' => ['required']
    ]);

    if (Auth::attempt($credentials)) {
    $request->session()->regenerate();
    return redirect()->intended('/home');
    }

    return back()->with('loginError', 'Email atau password yang dimasukkan salah!');
    }

    public function logout(Request $request)
    {
    Auth::logout();

    request()->session()->invalidate();

    request()->session()->regenerateToken();

    return redirect('/login2');
    }
}
