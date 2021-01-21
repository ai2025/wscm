<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Te7aHoudini\LaravelTrix\Traits\HasTrixRichText;

class Blog extends Model
{
    use HasFactory;
    use HasTrixRichText;

    protected $fillable = ['tag', 'title', 'content',];
}
