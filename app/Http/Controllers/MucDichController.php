<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MucDich;

class MucDichController extends Controller
{
    public function __construct(){
            $this->mucdich=MucDich::all();
        }
    public function getDanhSach(){
            $mucdich=MucDich::all();
            return view('admin.mucdich.danhsach',compact('mucdich'));
        }
    public function suaMucDich($id){
            $mucdich=MucDich::where('id',$id)->first();
            return view('admin.mucdich.sua',compact('mucdich'));
        }
        public function postSuaMucDich($id,Request $req){
             $anhdaidien="";
            if ($req->file('anh')) {
                $destinationPath="uploads/mucdich";
                $file=$req->anh;
                $extension=$file->getClientOriginalExtension();
                $filename= $req->file('anh')->getClientOriginalName();
                $file->move($destinationPath,$filename);
                $anhdaidien='uploads/mucdich/'.$filename;
            } else {
                dd("có lỗi xảy ra");
            }
            $b= MucDich::where('id',$id)->update(['ten'=>$req->ten,'tenkhongdau'=>changeTitle($req->ten),'anh'=>$anhdaidien]);
            return redirect()->route('danhSachMucDich',['mucdich'=>$this->mucdich]);
        }
    public function postThemMucDich(Request $req){
            $errors=$this->validate($req,
                [
                    'ten'=>'unique:MucDich'
                ],
                [ 
                    'ten'=>"tên mục dích này đã tồn tại"
                ]);
            $mucdich= new MucDich();
            $mucdich->ten=$req->ten;
            $mucdich->tenkhongdau=changeTitle($req->ten);
            if ($req->file('anh')) {
                $destinationPath="uploads/mucdich";
                $file=$req->anh;
                $extension=$file->getClientOriginalExtension();
                $filename= $req->file('anh')->getClientOriginalName();
                $file->move($destinationPath,$filename);
                $mucdich->anh='uploads/mucdich/'.$filename;
            } else {
                dd("có lỗi xảy ra");
            }
            $mucdich->save();
            return redirect()->route('danhSachMucDich',['mucdich'=>$this->mucdich]);
        }
    public function xoaMucDich($id){
            $mucdich= MucDich::where('id',$id)->delete();
            return redirect()->back()->with('thanhcong','xoá thành công !!!');
        }
}
