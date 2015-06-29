<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Dimsav\Translatable\Translatable;

class Notification extends Model
{
	use Translatable;

    protected $fillable = [
		'title',
		'message',
		'start_date',
		'end_date',
		'priority'
	];

	public $translatedAttributes = [
		'title',
		'message',
	];


	protected $guarded = [
		'id',
		'created_at',
		'updated_at'
	];

	protected $table = 'notifications';

	public function location()
	{
		return $this->belongsTo('App\Location');
	}
}
