<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'email',
        'alamat',
        'tanggal_tempat_lahir',
        'jenis_kelamin',
        'orang_tua',
        'no_hp_orang_tua', 
        'nomor_telepon'  
    ];
}
