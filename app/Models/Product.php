<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'product_variant_id',
        'name',
        'size',
        'slug',
        'flavor',
        'image',
        'slogan',
        'description',
        'nutrition',
        'ingredient'
    ];

    public function productVariant()
    {
        return $this->belongsTo(ProductVariant::class);
    }

    public function productExcelences()
    {
        return $this->hasMany(ProductExcelence::class);
    }

    public function productCompotition()
    {
        return $this->hasMany(ProductCompetition::class);
    }

    /**
     * Get the variant associated with the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function variant(): HasOne
    {
        return $this->hasOne(ProductVariant::class, 'id', 'product_variant_id');
    }


}
