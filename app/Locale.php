<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locale extends Model
{
	protected $fillable = [
		'name',
		'value'
	];

	protected $guarded = [
		'id',
		'created_at',
		'updated_at'
	];

	protected $table = 'locales';

	public function locations()
	{
		return $this->hasMany('App\Location');
	}

	public function users()
	{
		return $this->hasMany('App\User');
	}
}
