<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasTranslationsFixed;

class Product extends Model
{
    use HasFactory, HasTranslationsFixed;

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

    public function downloads()
    {
        return $this->morphToMany(Download::class, 'downloadable');
    }

    public function filters()
    {
        return $this->belongsToMany(Filter::class, 'filter_product')->withPivot('filter_value_id');
    }

    public function filterValues()
    {
        return $this->belongsToMany(FilterValue::class);
    }
}
