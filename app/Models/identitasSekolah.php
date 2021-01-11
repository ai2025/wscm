<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class identitasSekolah extends Model
{
    use HasFactory;
    protected $table = "identitasSekolah";
    protected $fillable = [
        'nama','nis','alamat','kab','provinsi','negara','email','web','telp','pos',
    ];
}
