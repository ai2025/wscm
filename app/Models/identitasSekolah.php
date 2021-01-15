<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class IdentitasSekolah extends Model
{
    use HasFactory;
    // public $table = 'identitas_sekolahs';
    protected $fillable = [
        'nama', 'nis', 'alamat', 'kab', 'provinsi', 'negara', 'email', 'web', 'telp', 'pos',
    ];

    // public function getAllData()
    // {
    //     return DB::table('identitas_sekolahs')->get();
    // }
}
