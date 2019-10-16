<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AjaxCrud extends Model
{
    protected $fillable = [
        'firts_name', 'last_name', 'image'
    ];
}
