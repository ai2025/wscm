<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataAlumni extends Model
{
    use HasFactory;
    protected $fillable = [
        'namaAlumni', 'nisAlumni', 'tmptLahir', 'tglLahir', 'telpAlumni', 'emailAlumni', 'gender', 'jurusanAlumni',
        'thnLulus', 'pkl', 'pengalamanKrj', 'statusPkrjaan', 'tmptKerKul',
    ];

    // protected $guarded = [];
}
