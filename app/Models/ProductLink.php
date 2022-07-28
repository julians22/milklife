<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductLink extends Model
{
    use HasFactory;

    const LINK_TYPE_TOKOPEDIA = 'tokopedia';
    const LINK_TYPE_BLIBLI = 'blibli';
    const LINK_TYPE_SHOPEE = 'shopee';

    protected $fillable = [
        'product_id',
        'name',
        'url',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function isTokopedia()
    {
        return $this->name == self::LINK_TYPE_TOKOPEDIA;
    }

    public function isBlibli()
    {
        return $this->name == self::LINK_TYPE_BLIBLI;
    }

    public function isShopee()
    {
        return $this->name == self::LINK_TYPE_SHOPEE;
    }
}
