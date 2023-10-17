<?php

namespace App\Http\Controllers;

use App\Models\peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index(){
        $peminjamans = peminjaman::all();
        return view('template/peminjaman', compact('peminjamans')); 
    }

    public function edit(){
        $peminjamans = peminjaman::all();
        return view('template/peminjaman', compact('peminjamans')); 
    }
}
