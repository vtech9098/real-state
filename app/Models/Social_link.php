<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social_link extends Model
{
    use HasFactory;
    public $table = 'social_links';
    public $timestamps = false;
    protected $fillable = [
        'share_url',
        'url',
        'icon',
        'share_url',

    ];
}