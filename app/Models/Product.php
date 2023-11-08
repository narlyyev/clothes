<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $protected = [
        'id'
    ];
    public function attributeValues()
    {
        return $this->belongsToMany(AttributeValue::class, 'product_attribute_values');
    }

    public function merchant()
    {
        return $this->belongsTo(Merchant::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }

    public function color()
    {
        return $this->belongsTo(AttributeValue::class, 'color_id');
    }

    public function discountMenu()
    {
        return $this->belongsTo(Menu::class, 'discount_menu_id');
    }

    
}
