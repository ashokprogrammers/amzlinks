<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class SocialAuth extends Model {

	protected $fillable = ['user_id', 'provider_user_id', 'provider'];

	public function user() {
		return $this->belongsTo('App\User');
	}
}