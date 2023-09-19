<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function beranda()
    {
        return view('beranda');
    }

    public function peminjaman()
    {
        return view('peminjaman');
    }
}
    class AuthController extends Controller
{
    // Metode lain ...

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}



