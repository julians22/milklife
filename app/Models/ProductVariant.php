<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'image'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function products_size_desc()
    {
        return $this->hasMany(Product::class)->orderBy('size', 'desc');
    }
}
