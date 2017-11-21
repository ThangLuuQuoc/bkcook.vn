<?php

namespace App\Http\Controllers;
use App\Models\User;
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
		$photo="";
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
		}

		$user->noibat = $request->noibat;
		$user->level = $request->rdoUser;
		$user->save();
		return redirect('user/danhsach')->with('thongbao', 'Them thanh cong');

	}
	public function getSua($id) {

	}
	public function postSua(Request $request, $id) {

	}
	public function getXoa($id) {

	}
}
