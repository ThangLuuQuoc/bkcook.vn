<?php

namespace App\Http\Controllers;
use App\Models\CongDung;
use App\Models\LoaiMon;
use App\Models\MonAn;
use App\Models\MucDich;
use App\Models\TheLoai;
use App\Models\User;
use App\Models\VungMien;

class ThongKeController extends Controller {
	public function getLichSu() {
		return view('admin.thongke.lichsu');
	}
	public function getThucHienTK() {

		$theloai = TheLoai::all();
		$loaimon = LoaiMon::all();
		$mucdich = MucDich::all();
		$congdung = CongDung::all();
		$vungmien = VungMien::all();
		$monan = MonAn::all();
		$users = User::all();

		return view('admin.thongke.ketqua');
	}
}
