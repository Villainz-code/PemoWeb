<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }
    public function login(Request $Request)
    {
        $credentials = $Request->only('email','password');

        if (Auth::attempt(array_merge($credentials, ['is_admin' => 1]))) {
            $Request->session()->regenerate();
            return redirect()->intended('/admin/dashboard');
        }
        return back()->withErrors([
            'email'=> 'Email tidak terdaftar',
        ]);
    }

    public function logout(Request $Request)
    {
        Auth::logout();
        $Request->session()->invalidate();
        $Request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }

}
