<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Dimsav\Translatable\Translatable;

class Category extends Model
{
    use Translatable;

    protected $fillable = [
		'name',
		'amount',
	];

	public $translatedAttributes = [
		'name',
	];


	protected $guarded = [
		'id',
		'created_at',
		'updated_at'
	];

	protected $table = 'categories'

	public function location()
	{
		return $this->belongsTo('App\Location');
	}

	public function food()
	{
		return $this->hasMany('App\Food');
	}
}
