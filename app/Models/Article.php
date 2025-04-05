<?php

namespace App\Models;

use App\Abstracts\LocalizableModel;
use Illuminate\Database\Eloquent\Model;

class Article extends LocalizableModel
{
    protected $table = "t_articles";
    protected $translationRelationKey = 'fk_i_article_id';
    protected $fillable = ['s_name','s_description','s_cover','b_enabled'];
    protected $localizable = ['s_name','s_description'];
}
