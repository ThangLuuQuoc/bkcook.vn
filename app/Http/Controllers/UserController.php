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

	}
}
