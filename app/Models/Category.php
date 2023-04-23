<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasFactory, HasTranslations;

    protected $guarded = [];

    public $translatable = ['title'];


    public function children()
    {
        return $this->hasMany(self::class, 'parent_id');
    }

    public function downloads()
    {
        return $this->morphToMany(Download::class, 'downloadable');
    }
}
