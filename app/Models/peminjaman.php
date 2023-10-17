<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    use HasFactory;

    //protected $primarykey = 'kode_buku';

    protected $fillable = [
        'id',
        'nama_anggota',
        'judul_buku',
        'penulis',
        'penerbit',
        'kode_buku',
        'tanggal_peminjaman',
        'petugas',
    ];

}
