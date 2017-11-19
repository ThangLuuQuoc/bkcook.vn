<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */
Route::get('/', function () {
	return view('customer.trangchu');
});

Route::group(['prefix' => 'user'], function () {
	Route::get('danhsach', 'UserController@getDanhSach');
	Route::get('them', 'UserController@getThem');
	Route::post('them', 'UserController@postThem');
	Route::get('sua/{id}', 'UserController@getSua');
	Route::post('sua/{id}', 'UserController@postSua');
	Route::get('xoa/{id}', 'UserController@getXoa');
});
Route::group(['prefix' => 'nhahang'], function () {
	Route::get('danhsach', 'NhaHangController@getDanhSach');
	Route::get('them', 'NhaHangController@getThem');
	Route::post('them', 'NhaHangController@postThem');
	Route::get('xoa', 'NhaHangController@getXoa');
	Route::get('themmenu', 'NhaHangController@getThemMenu');
	Route::post('themmenu', 'NhaHangController@postThemMenu');

});

//admin -> theloai
Route::group(['prefix' => 'theloai'],function(){
	Route::get('danhsach',['as'=>'danhSachTheLoai','uses'=>'TheLoaiController@getDanhSach']);
	Route::get('sua/{id}',['as'=>'suaTheLoai','uses'=>'TheLoaiController@SuaTheLoai']);
	Route::post('sua/{id}',['as'=>'suaTheLoai','uses'=>'TheLoaiController@postSuaTheLoai']);
	Route::get('them',['as'=>'themTheLoai',function(){
			return view('admin.theloai.them');
		}]);
	Route::post('them',['as'=>'themTheLoai','uses'=>'TheLoaiController@postThemTheLoai']);
	Route::get('xoa/{id}',['as'=>'xoaTheLoai','uses'=>'TheLoaiController@xoaTheLoai']);
});

//admin -> loaimon
Route::group(['prefix' => 'loaimon'],function(){
	Route::get('danhsach',['as'=>'danhSachLoaiMon','uses'=>'LoaiMonController@getDanhSach']);
	Route::get('sua/{id}',['as'=>'suaLoaiMon','uses'=>'LoaiMonController@SuaLoaiMon']);
	Route::post('sua/{id}',['as'=>'suaLoaiMon','uses'=>'LoaiMonController@postSuaLoaiMon']);
	Route::get('them',['as'=>'themLoaiMon','uses'=>'LoaiMonController@getThemLoaiMon']);
	Route::post('them',['as'=>'themLoaiMon','uses'=>'LoaiMonController@postThemLoaiMon']);
	Route::get('xoa/{id}',['as'=>'xoaLoaiMon','uses'=>'LoaiMonController@xoaLoaiMon']);
});
//admin -> congdung
Route::group(['prefix' => 'congdung'],function(){
	Route::get('danhsach',['as'=>'danhSachCongDung','uses'=>'CongDungController@getDanhSach']);
	Route::get('sua/{id}',['as'=>'suaCongDung','uses'=>'CongDungController@suaCongDung']);
	Route::post('sua/{id}',['as'=>'suaCongDung','uses'=>'CongDungController@postSuaCongDung']);
	Route::get('them',['as'=>'themCongDung',function(){
			return view('admin.congdung.them');
		}]);
	Route::post('them',['as'=>'themCongDung','uses'=>'CongDungController@postThemCongDung']);
	Route::get('xoa/{id}',['as'=>'xoaCongDung','uses'=>'CongDungController@xoaCongDung']);
});
// admin muc dich
Route::group(['prefix' => 'mucdich'],function(){
	Route::get('danhsach', ['as'=>'danhSachMucDich','uses'=>'MucDichController@getDanhSach']);
	Route::get('sua/{id}',['as'=>'suaMucDich','uses'=>'MucDichController@SuaMucDich']);
	Route::post('sua/{id}',['as'=>'suaMucDich',	'uses'=>'MucDichController@postSuaMucDich']);
	Route::get('them',['as'=>'themMucDich', function(){
			return view('admin.mucdich.them');
		}]);
	Route::post('them',['as'=>'themMucDich','uses'=>'MucDichController@postThemMucDich']);
	Route::get('xoa/{id}',['as'=>'xoaMucDich','uses'=>'MucDichController@xoaMucDich']);
});
//quan lý vung mien
Route::group(['prefix' => 'vungmien'],function(){
	Route::get('danhsach',['as'=>'danhSachVungMien','uses'=>'VungMienController@getDanhSach']);
	Route::get('sua/{id}',['as'=>'suaVungMien','uses'=>'VungMienController@SuaVungMien']);
	Route::post('sua/{id}',['as'=>'suaVungMien','uses'=>'VungMienController@postSuaVungMien']);
	Route::get('them',['as'=>'themVungMien',function(){
			return view('admin.vungmien.them');
		}]);
	Route::post('them',['as'=>'themVungMien','uses'=>'VungMienController@postThemVungMien']);
	Route::get('xoa/{id}',['as'=>'xoaVungMien','uses'=>'VungMienController@xoaVungMien']);
});

//ad Nha hang
Route::get('admin/nhahang/danhsach', [
	'as'=>'danhSachNhaHang',
	'uses'=>'NhaHangController@getDanhSach']
);

//Customer
Route::get('trangchu', function () {
	return view('customer.trangchu');
});

Route::get('theloai', function () {
	return view('customer.theloai');
});

Route::get('loaimon', function () {
	return view('customer.loaimon');
});

Route::get('mucdich', function () {
	return view('customer.mucdich');
});

Route::get('vungmien', function () {
	return view('customer.vungmien');
});

Route::get('monan', function () {
	return view('customer.monan');
});

Route::get('nhahang', function () {
	return view('customer.nhahang');
});

Route::get('thanhvien', function () {
	return view('customer.thanhvien');
});

Route::get('dangnhap', function () {
	return view('customer.dangnhap');
});

Route::get('chitietmonan', function () {
	return view('customer.chitietmonan');
});
Route::get('login', function () {
	return view('customer.login');
});
Route::get('singup', function () {
	return view('customer.singup');
});
Route::get('dangbai', function () {
	return view('customer.dangbai');
});
//test Model
// Route::get('mon an', function () {
// 	$monan = MonAn::all()->toArray();
// 	if ($monan == null) {
// 		echo "Chua co mon an nao trong DataBase";
// 	}
// 	echo "<br>";
// 	print_r($monan);
// 	echo "<br />";
// });

// Route mon an
Route::get('admin/monan/danhsach', [
	'as' => 'danhSachMonAn',
	'uses' => 'MonAnController@getDanhSachMonAn'
]);

Route::get('admin/monan/them', [
	'as' => 'themMonAn',
	'uses' => 'MonAnController@getViewThemMonAn'
]);

Route::post('admin/monan/them', [
	'as' => 'themMonAn',
	'uses' => 'MonAnController@themMonAn'
]);

Route::get('admin/monan/sua/{id}', [
	'as' => 'suaMonAn',
	'uses' => 'MonAnController@getViewSuaMonAn'
]);

Route::post('admin/monan/sua/{id}', [
	'as' => 'suaMonAn',
	'uses' => 'MonAnController@suaMonAn'
]);

Route::get('admin/monan/xoa/{id}', [
	'as' => 'xoaMonAn',
	'uses' => 'MonAnController@xoaMonAn'
]);

// Route buoc nau
Route::get('admin/monan/thembuocnau/{id}', [
	'as' => 'themBuocNau',
	'uses' => 'CacBuocNauController@getViewThemBuocNau'
]);

Route::post('admin/monan/thembuocnau/{id}', [
	'as' => 'themBuocNau',
	'uses' => 'CacBuocNauController@themBuocNau'
]);

Route::get('admin/monan/suabuocnau/{id_monan}/{id_buocnau}', [
	'as' => 'suaBuocNau',
	'uses' => 'CacBuocNauController@getViewSuaBuocNau'
]);

Route::post('admin/monan/suabuocnau/{id_monan}/{id_buocnau}', [
	'as' => 'suaBuocNau',
	'uses' => 'CacBuocNauController@suaBuocNau'
]);

Route::get('admin/monan/xoabuocnau/{id_monan}/{id_buocnau}', [
	'as' => 'xoaBuocNau',
	'uses' => 'CacBuocNauController@xoaBuocNau'
]);