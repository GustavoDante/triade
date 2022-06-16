<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClothingSizesStock extends Model
{
    use HasFactory;
    
    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $fillable = [
        'product_id',
        'gender',
        'GG',
        'G',
        'M',
        'P',
        'PP',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
