<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // Definisi many-to-many relationship dengan model Peminjaman
    public function peminjaman() {
        return $this->belongsToMany(Peminjaman::class);
    }
}



