<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'content',
        'image_path',
    ];
    protected $casts = [
        'published_at' => 'datetime', // This will cast the published_at attribute to a Carbon instance.
    ];
}
