<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
		'name'
	];

	protected $guarded = [
		'id',
		'created_at',
		'updated_at'
	];

	protected $table = 'locations'

	public function locale()
	{
		return $this->belongsTo('App\Locale');
	}

	public function notifications()
	{
		return $this->hasMany('App\Notification');
	}

	public function categories()
	{
		return $this->hasMany('App\Category');
	}

	public function food()
	{
		return $this->hasMany('App\Food');
	}

	public function options()
	{
		return $this->hasMany('App\Option');
	}

	public function users()
	{
		return $this->hasMany('App\User');
	}
}
