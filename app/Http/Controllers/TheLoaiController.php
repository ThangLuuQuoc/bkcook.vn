<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TheLoai;
use Session;

class TheLoaiController extends Controller
{
    public function __construct(){
        $this->theloai=TheLoai::all();
    }
    public function getDanhSach(){
        $theloai=theloai::all();
        return view('admin.theloai.danhsach',compact('theloai'));
    }
    public function suaTheLoai($id){
        $theloai=theloai::where('id',$id)->first();
        return view('admin.theloai.sua',compact('theloai'));
    }
    public function postSuaTheLoai($id,Request $req){
        $anhdaidien="";
        if ($req->file('anh')) {
            $destinationPath="uploads/theloai";
            $file=$req->anh;
            $extension=$file->getClientOriginalExtension();
            $filename= $req->file('anh')->getClientOriginalName();
            $file->move($destinationPath,$filename);
            $anhdaidien=$filename;
        } else {
            dd("có lỗi xảy ra");
        }
        $b= theloai::where('id',$id)->update(['ten'=>$req->ten,'tenkhongdau'=>changeTitle($req->ten),'anh'=>$anhdaidien]);
        return redirect()->route('danhSachTheLoai',['theloai'=>$this->theloai]);
    }
    public function postThemTheLoai(Request $req){
        $errors=$this->validate($req,
            [
                'ten'=>'unique:Theloai'
            ],
            [ 
                'ten'=>"tên thể loại này đã tồn tại"
            ]);
        $theloai= new TheLoai();
        $theloai->ten=$req->ten;
        $theloai->tenkhongdau=changeTitle($req->ten);
        if ($req->file('anh')) {
            $destinationPath="uploads/theloai";
            $file=$req->anh;
            $extension=$file->getClientOriginalExtension();
            $filename= $req->file('anh')->getClientOriginalName();
            $file->move($destinationPath,$filename);
            $theloai->anh=$filename;
        } else {
            dd("có lỗi xảy ra");
        }
        $theloai->save();
        return redirect()->route('danhSachTheLoai',['theloai'=>$this->theloai]);
    }
    public function xoaTheLoai($id){
        $theloai= theloai::where('id',$id)->delete();
        return redirect()->back()->with('thanhcong','xoá thành công !!!');
    }
}
