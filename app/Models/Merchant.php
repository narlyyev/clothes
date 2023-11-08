<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    protected $protected = [
        'id'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
