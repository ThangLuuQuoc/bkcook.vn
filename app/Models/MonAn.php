<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MonAn extends Model {
	protected $table = "MonAn";
	//tạo lại liên kết ngược tới các bảng
	public function loaimon() {
		return $this->belongsTo('App\Models\LoaiMon', 'id_loaimon', 'id');
	}
	public function mucdich() {
		return $this->belongsTo('App\Models\MucDich', 'id_mucdich', 'id');
	}
	public function congdung() {
		return $this->belongsTo('App\Models\CongDung', 'id_congdung', 'id');
	}
	public function vungmien() {
		return $this->belongsTo('App\Models\VungMien', 'id_vungmien', 'id');
	}

	// tạo liên kết xuôi đi các bảng
	public function cacbuocnau() {
		return $this->hasMany('App\Models\CacBuocNau', 'id_monan', 'id');
	}
	public function video() {
		return $this->hasOne('App\Models\Video', 'id_monan', 'id');
	}
	public function comment() {
		return $this->hasMany('App\Models\CommentMonAn', 'id_monan', 'id');
	}
	public function nhahanglienket() {

		return $this->hasMany('App\Models\NhaHangLienKet', 'id_monan', 'id');
	}

}
