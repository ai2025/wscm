<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jmlhPsrtDidik extends Model
{
    use HasFactory;
    protected $fillable = [
        'jmlhSis','guru','kelas','jurusan',
    ];
}
