<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Te7aHoudini\LaravelTrix\Traits\HasTrixRichText;

class Blog extends Model
{
    use HasFactory;
    use HasTrixRichText;

    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        static::deleted(function ($post) {
            $post->trixRichText->each->delete();
            $post->trixAttachments->each->purge();
        });
    }

    // public function trixRender($field)
    // {
    //     return $this->trixRichText->where('field', $field)->first()->content;
    // }

    // public function trixImageRender($field)
    // {
    //     return $this->trixAttachments->where('field', $field)->first()->attachment;
    // }

    // protected $fillable = ['tag', 'title', 'content',];
}
