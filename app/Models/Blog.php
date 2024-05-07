<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    public $table = 'blogs';
   public $timestamps = false;
    protected $fillable = [
        'title',
        'slug',
        'short_description',
        'long_description',
        'image',
        'category',
        'tags',
        'seo_title',
        'seo_description',
        'seo_image',
        'seo_keyword',
        
    ];
}
