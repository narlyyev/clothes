<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;

    protected $protected = [
        'id',
    ];

    public function menus()
    {
        return $this->belongsToMany(Menu::class, 'menu_genders');
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    
}
