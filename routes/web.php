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

Route::get('admin/dangnhap', 'UserController@getAdminLogin');
Route::post('admin/dangnhap', 'UserController@postAdminLogin');
Route::get('admin/dangxuat', 'UserController@getAdminLogout');

Route::group(['prefix' => 'admin', 'middleware' => 'adminLogin'], function () {
//Giới thiệu trang admin
	Route::get('info-page-admin', function () {
		return view('admin.info');
	});
//Phần dành cho admin thêm tài khoản thành viên
	Route::group(['prefix' => 'user'], function () {
		Route::get('danhsach', 'UserController@getDanhSach');
		Route::get('them', 'UserController@getThem');
		Route::post('them', 'UserController@postThem');
		Route::get('sua/{id}', 'UserController@getSua');
		Route::post('sua/{id}', 'UserController@postSua');
		Route::get('xoa/{id}', 'UserController@getXoa');
	});
//Phần dành cho admin thêm tài khoản nhà hàng liên kết
	Route::group(['prefix' => 'nhahang'], function () {
		Route::get('danhsach', 'NhaHangController@getDanhSachTaiKhoanNH');
		Route::get('them', 'NhaHangController@getThemTaiKhoanNH');
		Route::post('them', 'NhaHangController@postThemTaiKhoanNH');
		Route::get('xoa', 'NhaHangController@getXoaTaiKhoanNH');
	});
//Phần dành cho thống kê
	Route::group(['prefix' => 'thongke'], function () {
		Route::get('lichsu', 'ThongKeController@getLichSu');
		Route::get('thuchientk', 'ThongKeController@getThucHienTK');
	});
//admin -> theloai
	Route::group(['prefix' => 'theloai'], function () {
		Route::get('danhsach', ['as' => 'danhSachTheLoai', 'uses' => 'TheLoaiController@getDanhSach']);
		Route::get('sua/{id}', ['as' => 'suaTheLoai', 'uses' => 'TheLoaiController@SuaTheLoai']);
		Route::post('sua/{id}', ['as' => 'suaTheLoai', 'uses' => 'TheLoaiController@postSuaTheLoai']);
		Route::get('them', ['as' => 'themTheLoai', function () {
			return view('admin.theloai.them');
		}]);
		Route::post('them', ['as' => 'themTheLoai', 'uses' => 'TheLoaiController@postThemTheLoai']);
		Route::get('xoa/{id}', ['as' => 'xoaTheLoai', 'uses' => 'TheLoaiController@xoaTheLoai']);
	});

//admin -> loaimon
	Route::group(['prefix' => 'loaimon'], function () {
		Route::get('danhsach', ['as' => 'danhSachLoaiMon', 'uses' => 'LoaiMonController@getDanhSach']);
		Route::get('sua/{id}', ['as' => 'suaLoaiMon', 'uses' => 'LoaiMonController@SuaLoaiMon']);
		Route::post('sua/{id}', ['as' => 'suaLoaiMon', 'uses' => 'LoaiMonController@postSuaLoaiMon']);
		Route::get('them', ['as' => 'themLoaiMon', 'uses' => 'LoaiMonController@getThemLoaiMon']);
		Route::post('them', ['as' => 'themLoaiMon', 'uses' => 'LoaiMonController@postThemLoaiMon']);
		Route::get('xoa/{id}', ['as' => 'xoaLoaiMon', 'uses' => 'LoaiMonController@xoaLoaiMon']);
	});
//admin -> congdung
	Route::group(['prefix' => 'congdung'], function () {
		Route::get('danhsach', ['as' => 'danhSachCongDung', 'uses' => 'CongDungController@getDanhSach']);
		Route::get('sua/{id}', ['as' => 'suaCongDung', 'uses' => 'CongDungController@suaCongDung']);
		Route::post('sua/{id}', ['as' => 'suaCongDung', 'uses' => 'CongDungController@postSuaCongDung']);
		Route::get('them', ['as' => 'themCongDung', function () {
			return view('admin.congdung.them');
		}]);
		Route::post('them', ['as' => 'themCongDung', 'uses' => 'CongDungController@postThemCongDung']);
		Route::get('xoa/{id}', ['as' => 'xoaCongDung', 'uses' => 'CongDungController@xoaCongDung']);
	});
// admin muc dich
	Route::group(['prefix' => 'mucdich'], function () {
		Route::get('danhsach', ['as' => 'danhSachMucDich', 'uses' => 'MucDichController@getDanhSach']);
		Route::get('sua/{id}', ['as' => 'suaMucDich', 'uses' => 'MucDichController@SuaMucDich']);
		Route::post('sua/{id}', ['as' => 'suaMucDich', 'uses' => 'MucDichController@postSuaMucDich']);
		Route::get('them', ['as' => 'themMucDich', function () {
			return view('admin.mucdich.them');
		}]);
		Route::post('them', ['as' => 'themMucDich', 'uses' => 'MucDichController@postThemMucDich']);
		Route::get('xoa/{id}', ['as' => 'xoaMucDich', 'uses' => 'MucDichController@xoaMucDich']);
	});
//quan lý vung mien
	Route::group(['prefix' => 'vungmien'], function () {
		Route::get('danhsach', ['as' => 'danhSachVungMien', 'uses' => 'VungMienController@getDanhSach']);
		Route::get('sua/{id}', ['as' => 'suaVungMien', 'uses' => 'VungMienController@SuaVungMien']);
		Route::post('sua/{id}', ['as' => 'suaVungMien', 'uses' => 'VungMienController@postSuaVungMien']);
		Route::get('them', ['as' => 'themVungMien', function () {
			return view('admin.vungmien.them');
		}]);
		Route::post('them', ['as' => 'themVungMien', 'uses' => 'VungMienController@postThemVungMien']);
		Route::get('xoa/{id}', ['as' => 'xoaVungMien', 'uses' => 'VungMienController@xoaVungMien']);
	});

// quản lý món ăn và các thực thể liên quan
	Route::group(['prefix' => 'monan'], function () {
		Route::get('danhsach', [
			'as' => 'danhSachMonAn',
			'uses' => 'MonAnController@getDanhSachMonAn',
		]);
		Route::get('them', [
			'as' => 'themMonAn',
			'uses' => 'MonAnController@getViewThemMonAn',
		]);
		Route::post('them', [
			'as' => 'themMonAn',
			'uses' => 'MonAnController@themMonAn',
		]);
		Route::get('sua/{id}', [
			'as' => 'suaMonAn',
			'uses' => 'MonAnController@getViewSuaMonAn',
		]);
		Route::post('sua/{id}', [
			'as' => 'suaMonAn',
			'uses' => 'MonAnController@suaMonAn',
		]);
		Route::get('xoa/{id}', [
			'as' => 'xoaMonAn',
			'uses' => 'MonAnController@xoaMonAn',
		]);
		Route::get('thembuocnau/{id}', [
			'as' => 'themBuocNau',
			'uses' => 'CacBuocNauController@getViewThemBuocNau',
		]);
		Route::post('thembuocnau/{id}', [
			'as' => 'themBuocNau',
			'uses' => 'CacBuocNauController@themBuocNau',
		]);
		Route::get('suabuocnau/{id_monan}/{id_buocnau}', [
			'as' => 'suaBuocNau',
			'uses' => 'CacBuocNauController@getViewSuaBuocNau',
		]);
		Route::post('suabuocnau/{id_monan}/{id_buocnau}', [
			'as' => 'suaBuocNau',
			'uses' => 'CacBuocNauController@suaBuocNau',
		]);
		Route::get('xoabuocnau/{id_monan}/{id_buocnau}', [
			'as' => 'xoaBuocNau',
			'uses' => 'CacBuocNauController@xoaBuocNau',
		]);
		Route::get('themvideo/{id}', [
			'as' => 'themVideo',
			'uses' => 'VideoController@getViewThemVideo',
		]);
		Route::post('themvideo/{id}', [
			'as' => 'themVideo',
			'uses' => 'VideoController@themVideo',
		]);
		Route::get('suavideo/{id_monan}/{id_video}', [
			'as' => 'suaVideo',
			'uses' => 'VideoController@getViewSuaVideo',
		]);
		Route::post('suavideo/{id_monan}/{id_video}', [
			'as' => 'suaVideo',
			'uses' => 'VideoController@suaVideo',
		]);
		Route::get('xoavideo/{id_monan}/{id_video}', [
			'as' => 'xoaVideo',
			'uses' => 'VideoController@xoaVideo',
		]);
	});
});

//Phần dành cho nhà hàng liên kết
Route::group(['prefix' => 'nhahang'], function () {
	Route::get('thongtin', 'NhaHangController@getThongTin');
	Route::get('suathongtin', 'NhaHangController@getSua');
	Route::get('themMenu', 'NhaHangController@getThemMenu');
	Route::post('themMenu', 'NhaHangController@postThemMenu');
});
//Phần dành cho tất cả mọi người

//Phần dành cho thành viên có tài khoản

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
Route::get('baiviet', function () {
	return view('customer.baiviet');
});

//Trang chi tiết
Route::get('chitiettheloai', function () {
	return view('customer.chitiettheloai');
});

Route::get('chitietloaimon', function () {
	return view('customer.chitietloaimon');
});

Route::get('chitietmucdich', function () {
	return view('customer.chitietmucdich');
});

Route::get('chitietnhahang', function () {
	return view('customer.chitietnhahang');
});

Route::get('chitietthanhvien', function () {
	return view('customer.chitietthanhvien');
});

Route::get('chitietvungmien', function () {
	return view('customer.chitietvungmien');
});
Route::get('dangbai', ['as' => 'dangBai', 'uses' => 'DangBaiController@loadDangBai']);
Route::get('findLoaiMon', 'DangBaiController@findLoaiMon');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
