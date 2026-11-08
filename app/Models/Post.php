<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'image',
        'title',
        'content',
        'category_id',
        'user_id',
        'slug',
        'published_at',
    ];
}
