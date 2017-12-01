<?php

namespace App\Http\Controllers;

use App\Models\NhaHang;
use App\Models\NhaHangLienKet;
use Illuminate\Http\Request;

class NhaHangController extends Controller {

//phần dành cho admin thêm tài nhà hàng liên kết
	public function getDanhSachTaiKhoanNH() {
		return view('admin.nhahang.danhsach');
	}
	public function getThemTaiKhoanNH() {
		return view('admin.nhahang.them');
	}
	public function postThemTaiKhoanNH(Request $request) {

	}
	public function getXoaTaiKhoanNH($id) {
		$tkNhaHang = NhaHang::find($id);
		$tkNhaHang->delete();
		return redirect('admin/nhahang/danhsach');
	}

//Phần dành cho nhà hàng đang nhập,thêm Menu
	public function getNhaHangLayThongTin() {
		$menu_old = NhaHangLienKet::all();

	}

}
