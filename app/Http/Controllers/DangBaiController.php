<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TheLoai;
use App\Models\LoaiMon;

class DangBaiController extends Controller
{
    public function loadDangBai() {
        $food_category = TheLoai::all();
    	return view('customer.dangbai',compact('food_category'));
    }

    public function findLoaiMon(Request $request) {
        $data = LoaiMon::select('id','ten')->where('id_theloai',$request->id)->take(100)->get();
        return response()->json($data);
    }
}
