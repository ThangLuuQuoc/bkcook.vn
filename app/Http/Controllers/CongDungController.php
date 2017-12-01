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
             $anhdaidien="";
           if ($req->file('anh')) {
                $destinationPath="uploads/congdung";
                $file=$req->anh;
                $extension=$file->getClientOriginalExtension();
                $filename= $req->file('anh')->getClientOriginalName();
                $file->move($destinationPath,$filename);
                $anhdaidien='uploads/congdung/'.$filename;
            } else {
                dd("có lỗi xảy ra");
            }
            $b= CongDung::where('id',$id)->update(['ten'=>$req->ten,'tenkhongdau'=>changeTitle($req->ten),'anh'=>$anhdaidien]);
            return redirect()->route('danhSachCongDung',['congdung'=>$this->congdung]);
        }
    public function postThemCongDung(Request $req){
            $this->validate($req,
                [
                    'ten'=>'unique:CongDung'
                ],
                [ 
                    'ten'=>"tên Công dụng này đã tồn tại"
                ]);
            $congdung= new CongDung();
            $congdung->ten=$req->ten;
            $congdung->tenkhongdau=changeTitle($req->ten);
        if ($req->file('anh')) {
            $destinationPath="uploads/congdung";
            $file=$req->anh;
            $extension=$file->getClientOriginalExtension();
            $filename= $req->file('anh')->getClientOriginalName();
            $file->move($destinationPath,$filename);
            $congdung->anh='uploads/congdung/'.$filename;
        } else {
            dd("có lỗi xảy ra");
        }
            $congdung->save();
            return redirect()->route('danhSachCongDung',['congdung'=>$this->congdung]);
        }
    public function xoaCongDung($id){
            $congdung= CongDung::where('id',$id)->delete();
            return redirect()->back()->with('thanhcong','xoá thành công !!!');
        }
}
