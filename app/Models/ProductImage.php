<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $fillable = [
        'product_id',
        'url_large',
        'url_medium',
        'url_thumb',
        'sort_order',
    ];
    //
}
