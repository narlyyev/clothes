<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $protected = [
        'id',
    ];
    public function parent()
    {
        return $this->belongsTo(Menu::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Menu::class, 'parent_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'menu_categories');
    }

    public function brands()
    {
        return $this->belongsToMany(Brand::class, 'menu_brands');
    }

    public function genders()
    {
        return $this->belongsToMany(Gender::class, 'menu_genders');
    }

    public function sliders()
    {
        return $this->belongsToMany(Slider::class, 'menu_sliders');
    }

    public function getName()
    {
        $locale = app()->getLocale();
        switch ($locale) {
            case 'tm':
                return $this->name;
                break;
            case 'ru':
                return $this->name_ru ?: $this->name;
                break;
            default:
                return $this->name;
        }
    }
}
