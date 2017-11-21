<?php

namespace App\Http\Controllers;

use App\Models\User;
use File;
use Illuminate\Http\Request;


class UserController extends Controller {

	public function getDanhSach() {
		$users = User::all();
		return view('admin.taikhoan.danhsach', ['users' => $users]);
	}
	public function getThem() {
		return view('admin.taikhoan.them');
	}
	public function postThem(Request $request) {
		
		$user = new User;
		$user->hovaten = $request->fullname;
		$gioitinh = $request->rdoGT;
		if ($gioitinh == 1) {
			$user->gioitinh = "Nam";
		} else if ($gioitinh == 2) {
			$user->gioitinh = "Nữ";
		} else {
			$user->gioitinh = "Không Xác Định";
		}
		$user->tuoi = $request->tuoi;
		$user->congviec = $request->congviec;
		$user->email = $request->email;
		$user->tentaikhoan = $request->tentaikhoan;
		$user->password = bcrypt($request->password);

		// Uploads file
		$file = $request->file('anh');
		$filename = $file->getClientOriginalName();
		$Hinh = str_random(4) . $filename;
		while (file_exists('uploads/customer/avatar/' . $Hinh)) {
			$Hinh = str_random(4) . $filename;
		}
		$file->move('uploads/customer/avatar', $Hinh);
		$user->anhdaidien = 'uploads/customer/avatar/' . $Hinh;
		// hết uploads file

		$user->noibat = $request->noibat;
		$user->level = $request->rdoUser;
		$user->save();
		return redirect('user/danhsach')->with('thongbao', 'Them thanh cong');

	}
	public function getSua($id) {

		$user = User::find($id);
		return view('admin.taikhoan.sua', ['user' => $user]);

	}
	public function postSua(Request $request, $id) {

	}
	public function getXoa($id) {

	}
}
