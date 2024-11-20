<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\User;
class AuthController extends Controller
{
    public function loginForm()
    {
        if(Auth::check()) {
            return redirect()->route('beranda');
        }
        return view('auth.login');
    }

    public function loginAction(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('beranda');
        }

        return redirect()->route('login')->with('error', 'Password atau Email Salah');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
