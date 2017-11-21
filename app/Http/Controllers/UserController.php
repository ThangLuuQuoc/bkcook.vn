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
<<<<<<< HEAD
		$photo="";
=======
		$this->validate($request, [
			'email' => 'required|email|unique:users,email',
			'tentaikhoan' => 'required|unique:users,tentaikhoan|min:4',
			'password' => 'required|min:6|max:64',
			'passwordAgain' => 'required|same:password',
			'anh' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
		]
			, [
				'email.required' => 'Chưa Nhập Email',
				'email.email' => 'Chưa Đúng Định Dạng Video',
				'passwordAgain.same' => 'Mật Khẩu Xác Thực Không Dúng',
			]);

>>>>>>> 2832ba4ebe116adb1e4b07c379a83b491269de71
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

<<<<<<< HEAD
		if ($request->file('Hinh')) {
			// dd($request->file('Hinh'));
			$destinationPath="uploads/avatar";
			$file=$request->Hinh;
			$extension=$file->getClientOriginalExtension();
			$filename= $request->file('Hinh')->getClientOriginalName().".".$extension;
			$file->move($destinationPath,$filename);
			$user->anhdaidien=$filename;
		} else {
			$user->anhdaidien = "";
=======
		// Uploads file
		$file = $request->file('anh');
		$filename = $file->getClientOriginalName();
		$Hinh = str_random(4) . $filename;
		while (file_exists('uploads/customer/avatar/' . $Hinh)) {
			$Hinh = str_random(4) . $filename;
>>>>>>> 2832ba4ebe116adb1e4b07c379a83b491269de71
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
		$user = User::find($id);
		$user->delete();
		return redirect('user/danhsach')->with('thongbao', 'Xóa Thành Công');

	}
}
