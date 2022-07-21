<?php

namespace App\Models;

use App\Domains\Auth\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    const TYPE_ARTICLE = 'article';
    const TYPE_RECIPE = 'recipe';
    const TYPE_BANNER = 'slider_promo';

    protected $fillable = [
        'title', 'slug', 'body', 'post_type', 'user_id', 'image', 'image_thumb', 'bg_code', 'post_date'
    ];

    protected $casts = [
        'post_date' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Scope a query to only include recipe type.
     *
     * @param  \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeRecipe($query)
    {
        return $query->where('post_type', self::TYPE_RECIPE);
    }

    /**
     * Scope a query to only include article type.
     *
     * @param  \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeArticle($query)
    {
        return $query->where('post_type', self::TYPE_ARTICLE);
    }

}
