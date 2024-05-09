<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'header_logo',
        'footer_logo',
        'favicon',
        'copyright',
        'about_us',
        'address',
        'email',
        'site_title',
        'seo_title',
        'phone',
        'seo_description',
        'seo_keywords',
        'seo_image',
        'enable_preloader',



    ];
}
