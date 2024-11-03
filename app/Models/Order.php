<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'fio',
            'phone',
            'email',
            'comment',
            'price'
    ];

    public function products(): HasMany
    {
        return $this->hasMany(OrderProduct::class, 'order_id');
    }
}
