<?php

namespace App\Models;

use App\Abstracts\LocalizableModel;
use Illuminate\Database\Eloquent\Model;

class Program extends LocalizableModel
{
    protected $table = "t_programs";
    protected $translationRelationKey = 'fk_i_program_id';
    protected $fillable = ['s_name','s_description','s_cover','b_enabled'];
    protected $localizable = ['s_name','s_description'];
}
