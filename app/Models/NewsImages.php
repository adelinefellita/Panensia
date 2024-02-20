<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsImages extends Model
{
    use HasFactory;

    protected $fillable = ['path', 'alt', 'news_id'];
}
