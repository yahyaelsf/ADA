<?php

namespace App\Models;

use App\Abstracts\LocalizableModel;
use App\Models\BaseModel;
use App\Traits\Resourceable;

class Album extends LocalizableModel
{
    use Resourceable;
    protected $table = "t_albums";
    protected $fillable = ['s_title', 's_description', 's_cover'];
    protected $localizable = ['s_title', 's_description'];
}
