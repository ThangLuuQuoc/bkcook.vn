<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NhaHang extends Model {
	protected $table = "NhaHang";

	public function nhahanglienket() {
		return $this->hasMany('App\Models\NhaHangLienKet', 'id_nhahang', 'id');
	}
	public function userpost() {
		return $this->hasMany('App\Models\UserPost', 'id_nhahang', 'id');
	}
}
