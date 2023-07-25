<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email harus diisi',
            'password.required' => 'Password harus diisi'
        ]);

        $dataLogin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($dataLogin)) {
            if (Auth::user()->role == 'operator') {
                return redirect('admin/operator');
            } else if (Auth::user()->role == 'bendahara') {
                return redirect('admin/bendahara');
            } else if (Auth::user()->role == 'bendahara') {
                return redirect('admin/bendahara');
            } else if (Auth::user()->role == 'marketing') {
                return redirect('admin/marketing');
            }
        } else {
            return redirect('')->withErrors('Username and password yang diinput salah!')->withInput();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('');
    }
}
