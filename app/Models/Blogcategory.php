<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogcategory extends Model
{
    use HasFactory;
    public $table = 'blog-category';
    public $timestamps = false;
     protected $fillable = [
        'name',
        'slug',
        'description',
         
     ];
}

