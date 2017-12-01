<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MonAn;
use App\Models\MucDich;
use App\Models\LoaiMon;
use App\Models\CongDung;
use App\Models\VungMien;
use App\Models\CacBuocNau;
use App\Models\Video;
use File;

class MonAnController extends Controller
{
    public function getDanhSachMonAn() {
    	$monan = MonAn::all();
        $buocnau = CacBuocNau::all();
    	return view('admin.monan.danhsach', compact('monan', 'buocnau'));
    }

    public function getViewThemMonAn() {
        $mucdich = MucDich::all();
        $loaimon = LoaiMon::all();
        $congdung = CongDung::all();
        $vungmien = VungMien::all();
    	return view('admin.monan.them', compact('mucdich', 'loaimon', 'congdung', 'vungmien'));
    }

    public function themMonAn(Request $req) {
        $monan = new MonAn();
        $monan -> ten_monan = $req -> tenMonAn;
        $monan -> gioithieu = $req -> gioiThieu;
        $monan -> nguyen_lieu_chinh = $req -> nLChinh;
        $monan -> nguyen_lieu_phu = $req -> nLPhu;
        $monan -> giavi = $req -> giaVi;
        $monan -> do_kho = $req -> doKho;
        $monan -> so_buoc = $req -> soBuoc;
        $monan -> so_luot_xem = 0;
        $monan -> so_luot_thich = 0;
        $monan -> id_mucdich = $req -> mucDich;
        $monan -> id_loaimon = $req -> loaiMon;
        $monan -> id_congdung = $req -> congDung;
        $monan -> id_vungmien = $req -> vungMien;

        $monan -> save();
        return redirect() -> route('danhSachMonAn') -> with('themmonanthanhcong','Đã Thêm Món Ăn Thành Công!');
    }

    public function getViewSuaMonAn($id) {
        $monan = MonAn::find($id);
        $mucdich = MucDich::all();
        $loaimon = LoaiMon::all();
        $congdung = CongDung::all();
        $vungmien = VungMien::all();
        $video = Video::where('id_monan', $id) -> first();
        $cacbuocnau = CacBuocNau::where('id_monan', $id) -> get();
    	return view('admin.monan.sua', compact('monan', 'mucdich', 'loaimon', 'congdung', 'vungmien', 'cacbuocnau', 'video'));
    }

    public function suaMonAn(Request $req, $id) {
    	$monan = MonAn::find($id);
        
        $monan -> ten_monan = $req -> tenMonAn;
        $monan -> gioithieu = $req -> gioiThieu;
        $monan -> nguyen_lieu_chinh = $req -> nLChinh;
        $monan -> nguyen_lieu_phu = $req -> nLPhu;
        $monan -> giavi = $req -> giaVi;
        $monan -> do_kho = $req -> doKho;
        $monan -> so_buoc = $req -> soBuoc;
        $monan -> so_luot_xem = 0;
        $monan -> so_luot_thich = 0;
        $monan -> id_mucdich = $req -> mucDich;
        $monan -> id_loaimon = $req -> loaiMon;
        $monan -> id_congdung = $req -> congDung;
        $monan -> id_vungmien = $req -> vungMien;

        $monan -> save();
        return redirect() -> route('danhSachMonAn') -> with('suamonanthanhcong','Đã Sửa Món Ăn Thành Công!');
    }

    public function xoaMonAn($id) {
        $anh = 'uploads/monan/' . CacBuocNau::where('id_monan', $id) -> value('image');
        $video = 'uploads/video/' . Video::where('id_monan', $id) -> value('ten');
    	$monan = MonAn::find($id);
        File::delete($video);
        File::delete($anh);
    	$monan -> delete();
    	return redirect() -> route('danhSachMonAn');
    }
}
