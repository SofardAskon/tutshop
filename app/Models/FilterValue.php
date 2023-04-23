<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class FilterValue extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = ['value', 'filter_id'];

    public $translatable = ['value'];

    public function filter()
    {
        return $this->belongsTo(Filter::class);
    }
}
