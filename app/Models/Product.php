<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = ['id', 'created_at', 'updated_at', 'deleted_at'];

    protected $fillable = [
        'title',
        'type',
        'description',
        'short_description',
        'tag',
        'price',
        'discount',
        'image',
        'image_2',
        'image_3',
        'image_4',
        'image_5',

    ];

    
}
