<?php

namespace App\Models;

use App\Abstracts\LocalizableModel;
use Illuminate\Database\Eloquent\Model;

class Activity extends LocalizableModel
{
    protected $table = "t_activities";
    protected $translationRelationKey = 'fk_i_activity_id';
    protected $fillable = ['s_name','s_description','s_cover','b_enabled'];
    protected $localizable = ['s_name','s_description'];
}
