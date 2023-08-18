<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title',
        'category_title',
        'sub_category_title',
        'slug',
        'price',
        'quantity',
        'short_description',
        'long_description',
        'image',

    ];
}
