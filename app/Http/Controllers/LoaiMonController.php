<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoaiMon;
use App\Models\TheLoai;

class LoaiMonController extends Controller
{
     public function __construct(){
            $this->theloai=TheLoai::all();
            $this->loaimon=LoaiMon::all();
        }
    public function getDanhSach(){
            $loaimon=$this->loaimon;
            $theloai=$this->theloai;
            return view('admin.loaimon.danhsach',compact('loaimon','theloai'));
        }
    public function suaLoaiMon($id){
            $loaimon=loaimon::where('id',$id)->first();
            $theloai=$this->theloai;
            return view('admin.loaimon.sua',compact('loaimon','theloai'));
        }
        public function postSuaLoaiMon($id,Request $req){
            $b= loaimon::where('id',$id)->update(['ten'=>$req->ten,'tenkhongdau'=>changeTitle($req->ten),'id_theloai'=>$req->idtheloai]);
            return redirect()->route('danhSachLoaiMon',['loaimon'=>$this->loaimon]);
        }
    public function getThemLoaiMon(){

            $theloai=$this->theloai;
            return view('admin.loaimon.them',compact('theloai'));
        }
    public function postThemLoaiMon(Request $req){
        $errors=$this->validate($req,
                [
                    'ten'=>'unique:LoaiMon'
                ],
                [ 
                    'ten'=>"tên loại món này đã tồn tại"
                ]);
            $loaimon= new loaimon();
            $loaimon->ten=$req->ten;
            $loaimon->tenkhongdau=changeTitle($req->ten);
            $loaimon->id_theloai=$req->idtheloai;
            $loaimon->save();
            return redirect()->route('danhSachLoaiMon');
        }
    public function xoaLoaiMon($id){
            $loaimon= loaimon::where('id',$id)->delete();
            return redirect()->back()->with('thanhcong','xoá thành công !!!');
        }
}
