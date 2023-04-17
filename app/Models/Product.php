<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Product extends Model
{
    use HasFactory, HasTranslations;

    protected $guarded = [];

    public $translatable = ['name', 'characteristics', 'description'];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class);
    }

    public function sizes()
    {
        return $this->belongsToMany(Size::class);
    }

    public function downloads()
    {
        return $this->morphToMany(Download::class, 'downloadable');
    }
}
