<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CongDung;

class CongDungController extends Controller
{
	public function __construct(){
			$this->congdung=CongDung::all();
		}
	public function getDanhSach(){
			$congdung=CongDung::all();
			return view('admin.congdung.danhsach',compact('congdung'));
		}
    public function suaCongDung($id){
    		$congdung=CongDung::where('id',$id)->first();
    		return view('admin.congdung.sua',compact('congdung'));
    	}
    	public function postSuaCongDung($id,Request $req){
    		$b= CongDung::where('id',$id)->update(['ten'=>$req->name1,'tenkhongdau'=>$req->name2]);
    		// return redirect()->back()->with('thanhcong','sửa thành công !!!');
    		return redirect()->route('danhSachCongDung',['congdung'=>$this->congdung]);
    	}
    public function postThemCongDung(Request $req){
    		$congdung= new CongDung();
    		$congdung->ten=$req->name1;
    		$congdung->tenkhongdau=$req->name2;
    		$congdung->save();
    		// return redirect()->back()->with('thanhcong','thêm thành công !!!');
    		return redirect()->route('danhSachCongDung',['congdung'=>$this->congdung]);
    	}
    public function xoaCongDung($id){
    		$congdung= CongDung::where('id',$id)->delete();
    		return redirect()->back()->with('thanhcong','xoá thành công !!!');
    	}
}
