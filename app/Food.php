<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Dimsav\Translatable\Translatable;

class Food extends Model
{
     use Translatable;

    protected $fillable = [
		'name',
		'description',
		'photo',
		'vegetarian',
	];

	public $translatedAttributes = [
		'name',
		'description'
	];


	protected $guarded = [
		'id',
		'created_at',
		'updated_at'
	];

	protected $table = 'food'

	public function location()
	{
		return $this->belongsTo('App\Location');
	}

	public function category()
	{
		return $this->belongsTo('App\Category');
	}

	public function options()
	{
		return $this->hasMany('App\Option');
	}
}
