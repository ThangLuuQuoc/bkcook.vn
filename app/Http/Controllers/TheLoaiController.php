<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TheLoai;
use Session;

class TheLoaiController extends Controller
{
    public function getDanhSachTheLoai() {
    	$danh_sach = TheLoai::all();
    	return view('admin.theloai.danhsach', compact('danh_sach'));
    }

    public function getViewThemTheLoai() {
    	return view('admin.theloai.them');
    }

    public function themTheLoai(Request $req) {
    	$theloai = new TheLoai();
    	$theloai -> ten = $req -> ten;
    	$theloai -> tenkhongdau = changeTitle($req -> ten);
    	$theloai -> save();
    	return redirect() -> route('danhSachTheLoai') -> with('themthanhcong','Đã Thêm Thành Công!');
    }

    public function getViewSuaTheLoai($id) {
    	$theloai = TheLoai::find($id);
    	return view('admin.theloai.sua', compact('theloai'));
    }

    public function suaTheLoai(Request $req, $id) {
    	$theloai = TheLoai::find($id);
    	$theloai -> ten = $req -> ten;
    	$theloai -> tenkhongdau = changeTitle($req -> ten);
    	$theloai -> save();
    	return redirect() -> route('danhSachTheLoai') -> with('suathanhcong','Đã Sửa Thành Công!');
    }

    public function xoaTheLoai($id) {
    	$theloai = TheLoai::find($id);
    	$theloai -> delete();
    	return redirect() -> route('danhSachTheLoai');
    }
}
