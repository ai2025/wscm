<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImgCarIdenSekolah extends Model
{
    use HasFactory;
    protected $fillable = [
        'is_showing', 'imgIden', 'keterangan',
    ];
}
