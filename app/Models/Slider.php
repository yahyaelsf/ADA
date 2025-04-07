<?php

namespace App\Models;

use App\Abstracts\LocalizableModel;
use App\Models\BaseModel;

class Slider extends LocalizableModel
{
    protected $table = "t_sliders";
    protected $fillable = ['s_title', 's_description', 's_link', 's_cover'];
    protected $localizable = ['s_title', 's_description'];
        public function scopeActive($query)
    {
        return $query->where('b_enabled', 1);
    }
}
