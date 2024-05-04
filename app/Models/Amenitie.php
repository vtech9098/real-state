<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amenitie extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name',
        'icon',
        'image',
        
    ];
}
