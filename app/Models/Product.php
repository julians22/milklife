<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Product extends Model
{
    use HasFactory, SoftDeletes, HasSlug;

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

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function productVariant()
    {
        return $this->belongsTo(ProductVariant::class);
    }

    public function productExcelences()
    {
        return $this->hasMany(ProductExcelence::class);
    }

    public function productCompotitions()
    {
        return $this->hasMany(ProductCompotition::class);
    }

    public function productLinks()
    {
        return $this->hasMany(ProductLink::class, 'product_id', 'id');
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
