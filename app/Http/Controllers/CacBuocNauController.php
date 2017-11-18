<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MonAn;
use App\Models\CacBuocNau;

class CacBuocNauController extends Controller
{
    public function getViewThemBuocNau($id) {
        $monan = MonAn::find($id);
        return view('admin.monan.thembuocnau', compact('monan'));
    }

    public function themBuocNau(Request $req, $id) {
        $monan = MonAn::find($id);
        $cacbuocnau = new CacBuocNau();

        $cacbuocnau -> id_monan = $monan -> id;
        $cacbuocnau -> noidung = $req -> noiDungBuoc;
        $cacbuocnau -> image = $req -> image;

        $cacbuocnau -> save();
        return redirect() -> route('danhSachMonAn') -> with('thembuocnauthanhcong', 'Đã thêm bước nấu thành công');
    }

    public function getViewSuaBuocNau($id_monan, $id_buocnau) {
        $buocnau = CacBuocNau::where('id', $id_buocnau) -> where('id_monan', $id_monan) -> first();
        return view('admin.monan.suabuocnau', compact('buocnau'));
    }

    public function suaBuocNau(Request $req, $id_monan, $id_buocnau){
    	$monan = MonAn::where('id', $id_monan) -> first();
    	$buocnau = CacBuocNau::where('id', $id_buocnau) -> where('id_monan', $id_monan) -> first();

  		$buocnau -> noidung = $req -> noiDungBuoc;
  		$buocnau -> save();
  		return redirect() -> route('suaMonAn', $monan -> id) -> with('suabuocnauthanhcong', 'Đã sửa bước nấu thành công');
    }

    public function xoaBuocNau($id_monan, $id_buocnau) {
    	$monan = MonAn::where('id', $id_monan) -> first();
    	$buocnau = CacBuocNau::where('id', $id_buocnau) -> where('id_monan', $id_monan) -> delete();
    	return redirect() -> route('suaMonAn', $monan -> id);
    }
}
