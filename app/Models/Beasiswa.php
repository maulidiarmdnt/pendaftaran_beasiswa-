<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beasiswa extends Model
{
    use HasFactory;

    // untuk memproteksi agar namanya tetap tabel 'daftar'
    protected $table = 'beasiswa';

    // untuk menentukan data mana saja yang fillable
    protected $fillable = [
        'nama',
        'nim',
        'email',
        'no_hp',
        'semester',
        'ipk',
        'jenis_beasiswa',
        'berkas',
        'status',
    ];
}
