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

Route::get('admin/theloai/danhsach', [
	'as' => 'danhSachTheLoai',
	'uses' => 'TheLoaiController@getDanhSachTheLoai',
]);

Route::get('admin/theloai/them', [
	'as' => 'themTheLoai',
	'uses' => 'TheLoaiController@getViewThemTheLoai',
]);

Route::post('admin/theloai/them', [
	'as' => 'themTheLoai',
	'uses' => 'TheLoaiController@themTheLoai',
]);

Route::get('admin/theloai/sua/{id}', [
	'as' => 'suaTheLoai',
	'uses' => 'TheLoaiController@getViewSuaTheLoai',
]);

Route::post('admin/theloai/sua/{id}', [
	'as' => 'suaTheLoai',
	'uses' => 'TheLoaiController@suaTheLoai',
]);

Route::get('admin/theloai/xoa/{id}', [
	'as' => 'xoaTheLoai',
	'uses' => 'TheLoaiController@xoaTheLoai',
]);

// Route cong dung
Route::get('admin/congdung/danhsach', [
	'as' => 'danhSachCongDung',
	'uses' => 'CongDungController@getDanhSach']
);
Route::get('admin/congdung/danhsach/sua/{id}', [
	'as' => 'suaCongDung',
	'uses' => 'CongDungController@SuaCongDung']
);

Route::post('admin/congdung/danhsach/sua/{id}', [
	'as' => 'suaCongDung',
	'uses' => 'CongDungController@postSuaCongDung']
);

Route::get('admin/congdung/danhsach/them', [
	'as' => 'themCongDung',
	function () {
		return view('admin.congdung.them');
	}]);

Route::post('admin/congdung/danhsach/them', [
	'as' => 'themCongDung',
	'uses' => 'CongDungController@postThemCongDung']
);

Route::get('admin/congdung/danhsach/xoa/{id}', [
	'as' => 'xoaCongDung',
	'uses' => 'CongDungController@xoaCongDung']
);

// Route mon an
Route::get('admin/monan/danhsach', [
	'as' => 'danhSachMonAn',
	'uses' => 'MonAnController@getDanhSachMonAn',
]);

Route::get('admin/monan/them', [
	'as' => 'themMonAn',
	'uses' => 'MonAnController@getViewThemMonAn',
]);

Route::post('admin/monan/them', [
	'as' => 'themMonAn',
	'uses' => 'MonAnController@themMonAn',
]);

Route::get('admin/monan/sua/{id}', [
	'as' => 'suaMonAn',
	'uses' => 'MonAnController@getViewSuaMonAn',
]);

Route::post('admin/monan/sua/{id}', [
	'as' => 'suaMonAn',
	'uses' => 'MonAnController@suaMonAn',
]);

Route::get('admin/monan/xoa/{id}', [
	'as' => 'xoaMonAn',
	'uses' => 'MonAnController@xoaMonAn',
]);

// Route buoc nau
Route::get('admin/monan/thembuocnau/{id}', [
	'as' => 'themBuocNau',
	'uses' => 'MonAnController@getViewThemBuocNau',
]);

Route::post('admin/monan/thembuocnau/{id}', [
	'as' => 'themBuocNau',
	'uses' => 'MonAnController@themBuocNau',
]);

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
	'uses' => 'MonAnController@getDanhSachMonAn',
]);

Route::get('admin/monan/them', [
	'as' => 'themMonAn',
	'uses' => 'MonAnController@getViewThemMonAn',
]);

Route::post('admin/monan/them', [
	'as' => 'themMonAn',
	'uses' => 'MonAnController@themMonAn',
]);

Route::get('admin/monan/sua/{id}', [
	'as' => 'suaMonAn',
	'uses' => 'MonAnController@getViewSuaMonAn',
]);

Route::post('admin/monan/sua/{id}', [
	'as' => 'suaMonAn',
	'uses' => 'MonAnController@suaMonAn',
]);

Route::get('admin/monan/xoa/{id}', [
	'as' => 'xoaMonAn',
	'uses' => 'MonAnController@xoaMonAn',
]);

// Route buoc nau
Route::get('admin/monan/thembuocnau/{id}', [
	'as' => 'themBuocNau',
	'uses' => 'MonAnController@getViewThemBuocNau',
]);

Route::post('admin/monan/thembuocnau/{id}', [
	'as' => 'themBuocNau',
	'uses' => 'MonAnController@themBuocNau',
]);