<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Near_by extends Model
{
    use HasFactory;
    public $table = 'near_by';
    public $timestamps = false;
     protected $fillable = [
        'name',
        'icon',
        'image',
         
     ];
}
