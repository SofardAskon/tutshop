<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Filter extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = ['name'];

    public $translatable = ['name'];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'filter_product')->withPivot('filter_value_id');
    }

    public function values()
    {
        return $this->hasMany(FilterValue::class);
    }
}
