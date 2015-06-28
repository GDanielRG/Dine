<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodTranslation extends Model
{
     protected $fillable = [
    	'name',
    	'description',
    ];
}
