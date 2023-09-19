<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReturnController extends Controller
{
    public function showReturnPage()
    {
        // Logika untuk menampilkan halaman pengembalian
        return view('pengembalian');
    }

    public function processReturn(Request $request)
    {
        // Logika untuk memproses pengembalian
        // ...
        return redirect()->route('pengembalian.show')->with('success', 'Pengembalian berhasil.');
    }
}
