<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propertys extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $table = 'propertys';
    public $timestamps = false;

=======
    public $timestamps = false;
>>>>>>> 2e623520926cc55919d7daf75b05d5aba7277c1c
    protected $fillable = [
        'name',
        'slug',
        'type',
        'description',
        'is_featured',
        'main_image',
        'other_images',
        'country',
        'city',
        'state',
        'property_location',
        'latitude',
        'longitude',
        'no_of_floors',
        'no_of_bedrooms',
        'no_of_bathrooms',
        'square_meter',
        'price',
        'facilities',
        'features',
        'seo_title',
        'seo_image',
        'seo_description',
        'status',
        'category_ids',
        'unique_id',
    ];
}