<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
      protected $fillable = [
		'date_applicable'
	];

	protected $guarded = [
		'id',
		'created_at',
		'updated_at'
	];

	protected $table = 'options';

	public function location()
	{
		return $this->belongsTo('App\Location');
	}

	public function foodItem()
	{
		return $this->belongsTo('App\Food');
	}

	public function users()
    {
        return $this->belongsToMany('App\User')->withPivot('served');
    }
}
