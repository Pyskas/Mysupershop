<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    public function category(): BelongsTo
    {
        return $this->belongsTo( Category::class, 'categories_id');
    }

    public function images(): HasMany
    {
        return $this->hasMany( ProductImage::class);
    }

    public function options(): HasMany
    {
        return $this->hasMany( ProductOption::class);
    }
}
