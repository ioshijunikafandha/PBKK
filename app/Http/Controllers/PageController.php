<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
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
