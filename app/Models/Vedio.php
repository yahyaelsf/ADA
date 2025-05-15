<?php

namespace App\Models;

use App\Abstracts\LocalizableModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vedio extends LocalizableModel
{
    protected $table = "t_vedios";
    protected $fillable = ['s_title','s_vedio','s_link' , 's_cover'];
    protected $localizable = ['s_title'];



}
