<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KodeAkses extends Model
{
    use HasFactory;
    protected $fillable = [
        'kodeAkses', 'noWaAdm',
    ];
}
