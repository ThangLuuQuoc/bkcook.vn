<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VungMien;

class VungMienController extends Controller
{
   public function __construct(){
            $this->vungmien=VungMien::all();
        }
    public function getDanhSach(){
            $vungmien=VungMien::all();
            return view('admin.vungmien.danhsach',compact('vungmien'));
        }
    public function suaVungMien($id){
            $vungmien=VungMien::where('id',$id)->first();
            return view('admin.vungmien.sua',compact('vungmien'));
        }
        public function postSuaVungMien($id,Request $req){
             $anhdaidien="";
            if ($req->file('anh')) {
                $destinationPath="uploads/vungmien";
                $file=$req->anh;
                $extension=$file->getClientOriginalExtension();
                $filename= $req->file('anh')->getClientOriginalName();
                $file->move($destinationPath,$filename);
                $anhdaidien=$filename;
            } else {
                dd("có lỗi xảy ra");
            }
            $b= VungMien::where('id',$id)->update(['ten'=>$req->ten,'tenkhongdau'=>changeTitle($req->ten),'vitri'=>$req->vitri,'gioithieu'=>$req->gioithieu,'anh'=>$anhdaidien]);
            return redirect()->route('danhSachVungMien',['vungmien'=>$this->vungmien]);
        }
    public function postThemVungMien(Request $req){
            $errors=$this->validate($req,
                [
                    'ten'=>'unique:VungMien'
                ],
                [ 
                    'ten'=>"tên vùng miền này đã tồn tại"
                ]);
            $vungmien= new VungMien();
            $vungmien->ten=$req->ten;
            $vungmien->tenkhongdau=changeTitle($req->ten);
            $vungmien->vitri=$req->vitri;
            $vungmien->gioithieu=$req->gioithieu;
             if ($req->file('anh')) {
                $destinationPath="uploads/vungmien";
                $file=$req->anh;
                $extension=$file->getClientOriginalExtension();
                $filename= $req->file('anh')->getClientOriginalName();
                $file->move($destinationPath,$filename);
                $vungmien->anh=$filename;
            } else {
                dd("có lỗi xảy ra");
            }
            $vungmien->save();
            return redirect()->route('danhSachVungMien',['vungmien'=>$this->vungmien]);
        }
    public function xoaVungMien($id){
            $vungmien= VungMien::where('id',$id)->delete();
            return redirect()->back()->with('thanhcong','xoá thành công !!!');
        }
}
