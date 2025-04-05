<?php

namespace App\Models;

use App\Abstracts\LocalizableModel;
use Illuminate\Database\Eloquent\Model;

class Agricultrel extends LocalizableModel
{
    protected $table = "t_agricultrels";
    protected $translationRelationKey = 'fk_i_agricultrel_id';
    protected $fillable = ['s_name','s_key','s_description','s_cover','b_enabled'];
    protected $localizable = ['s_name','s_description'];
}
