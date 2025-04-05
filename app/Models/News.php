<?php

namespace App\Models;

use App\Abstracts\LocalizableModel;
use Illuminate\Database\Eloquent\Model;

class News extends LocalizableModel
{
    protected $table = "t_news";
    protected $translationRelationKey = 'fk_i_new_id';
    protected $fillable = ['s_name','s_description','s_cover','b_enabled'];
    protected $localizable = ['s_name','s_description'];
}
