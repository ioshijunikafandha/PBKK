<?php

namespace App\Http\Controllers;

use App\Models\peminjaman;
use App\Models\AnggotaPerpustakaan;
use App\Models\Buku;
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


    public function peminjamanBuku($anggotaId) {
         // Ambil data anggota perpustakaan
        $anggota = AnggotaPerpustakaan::find($anggotaId);

        // Ambil peminjaman buku oleh anggota tersebut
        $peminjaman = $anggota->buku;

        return view('peminjaman', compact('anggota', 'peminjaman'));
    }

}
