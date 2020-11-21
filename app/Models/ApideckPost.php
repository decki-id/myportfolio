<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApideckPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'likes',
        'content'
    ];

    protected $casts = [
        'likes' => 'integer',
    ];
}
