<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model {
	protected $table = "Video";

	public function monan() {
		return $this->belongsTo('App\Models\MonAn', 'id_monan', 'id');
	}
}
