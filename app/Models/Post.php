<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Post extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia;

    const TYPE_ARTICLE = 'article';
    const TYPE_RECIPE = 'recipe';

    protected $fillable = [
        'title', 'slug', 'body', 'post_type', 'user_id', 'image', 'image_thumb', 'bg_code',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['image_url', 'image_thumb_url', 'image_name', 'image_thumb_name'];

    /**
     * Get Image Url attribute
     */
    public function getImageUrlAttribute(){
        if ($this->getMedia('post_image')->first()) {
            return $this->getMedia('post_image')->first()->getUrl();
        }
        return '';
    }

    /**
     * Get Image Thumb Url attribute
     */
    public function getImageThumbUrlAttribute(){
        if ($this->getMedia('post_thumbnail')->first()) {
            return $this->getMedia('post_thumbnail')->first()->getUrl();
        }
        return '';
    }

    /**
     * Get Image Name attribute
     */
    public function getImageNameAttribute(){
        if ($this->getMedia('post_image')->first()) {
            return $this->getMedia('post_image')->first()->name;
        }
        return '';
    }

    /**
     * Get Image Thumb Name attribute
     */
    public function getImageThumbNameAttribute(){
        if ($this->getMedia('post_thumbnail')->first()) {
            return $this->getMedia('post_thumbnail')->first()->name;
        }
        return '';
    }

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

    public function hasThumbnail()
    {
        $count_thumbnail = $this->getMedia('post_thumbnail')->count();
        return $count_thumbnail > 0;
    }

    public function hasImage()
    {
        $count_thumbnail = $this->getMedia('post_image')->count();
        return $count_thumbnail > 0;
    }

}
