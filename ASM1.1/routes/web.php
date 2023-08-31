<?php

use App\Http\Controllers\AdminLoaiController;
use App\Http\Controllers\AdminSPController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SpController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminUser;
use App\Http\Controllers\BinhluanController;
use App\Http\Controllers\QuenMKController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[SpController::class,'index']);
Route::get('/cat',[SpController::class,'catmain']);
Route::get('/cat/{id}',[SpController::class,'cat']);
Route::get('/detail/{id}/{idloai}',[SpController::class,'detail']);
Route::get('/contact',[Controller::class,'contact']);
Route::get('/blog',[Controller::class,'blog']);
Route::get('/userinfo',[Controller::class,'userinfo'])->middleware('auth','verified');
Route::post('/binhluan',[SpController::class,'binhluan']);


// Gio Hang--------------------------------------------------------
Route::get('addtocart/{idsp}/{soluong}',[SpController::class,'addcart']);
Route::get('showcart/',[SpController::class,'showcart']);
Route::get('delcart/{id_sp}',[SpController::class,'delcart']);

//-------------------ADMIN-------------------------------------
Route::group(['prefix' => 'admin'],function(){
    Route::resource('loai',AdminLoaiController::class);
    Route::resource('sanpham',AdminSPController::class);
    Route::resource('user',AdminUser::class);
});
Route::group(['prefix' => 'admin'], function() {  
    Route::get('index',[AdminController::class,'index']); 
    Route::get('dangnhap', [AdminController::class,'dangnhap']);
    Route::post('dangnhap', [AdminController::class,'dangnhap_']);
    Route::get('thoat', [AdminController::class,'thoat']);
});
Route::group(['prefix' => 'admin' ,'middleware' => 'adminauth'], function() {
    Route::get('index', [AdminController::class,'index']);
    Route::resource('loai',AdminLoaiController::class);
    Route::resource('sanpham',AdminSPController::class);
    Route::resource('user',AdminUser::class);
    Route::resource('binhluan',BinhluanController::class);
});
//-------------------------------------------------------------------


//--- dang nhap dang ky

Route::get('/dangnhap',[App\Http\Controllers\ThanhvienController::class,'dangnhap'])->name('login');
Route::post('/dangnhap', [App\Http\Controllers\ThanhvienController::class,'dangnhap_']);
Route::get('/thoat', [App\Http\Controllers\ThanhvienController::class,'thoat']);
Route::get('/dangky', [App\Http\Controllers\ThanhvienController::class,'dangky']);
Route::post('/dangky', [App\Http\Controllers\ThanhvienController::class,'dangky_']);
//forgot


//veryfi
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::get('/email/verify', function () {
    $type = \DB::table('loai')
    ->join( 'sanpham','sanpham.id_loai','=','loai.id_loai')
    ->select('sanpham.id_sp','loai.ten_loai')
    ->limit(12)
    ->get();
   \View::share('type',$type);
    return view('verify-email');
})->middleware('auth')->name('verification.notice');
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Thư kích hoạt đã gửi!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/forget_password',[QuenMKController::class,'quenmk'])->name('quenmkget');
Route::post('/forget_password',[QuenMKController::class,'quenmk_'])->name('quenmkpost');
Route::get('/reset-password/{token}',[QuenMKController::class,'resetpass']);
Route::post('/reset-password/{token}',[QuenMKController::class,'resetpass_']);