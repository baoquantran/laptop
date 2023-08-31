<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\dangKyValid;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

class ThanhvienController extends Controller
{
    public function __construct() {
        $loaisp = \DB::table('loai')->where('anhien','=',1 )->orderBy('thutu')->get();
        \View::share( 'loaisp', $loaisp );
    }
    function dangnhap(){
        return view('dangnhap'); 
    }
    function dangnhap_(Request $request){
        if(auth()->guard('web')
            ->attempt(['email'=>$request['email'],'password'=>$request['matkhau']])){
            $user = auth()->guard('web')->user();
            return redirect()->intended('/');
        }
        else return back()->with('thongbao','Email, Password không đúng');
     }
     function thoat(){
        auth()->guard('web')->logout();
        return redirect('/dangnhap')->with('thongbao','Bạn đã thoát thành công');
    }
    function dangky(){ 
        return view('dangky'); 
    }
    function dangky_(dangKyValid $request){ 
        
            //tiếp nhận dữ liệu từ form
            $email = strtolower(trim(strip_tags($request['email'])));
            $ho = trim(strip_tags($request['ho']));
            $ten = trim(strip_tags($request['ten']));
            $matkhau1 = trim(strip_tags($request['matkhau1']));
            $matkhau2 = trim(strip_tags($request['matkhau2']));
            $dc = trim(strip_tags($request['diachi']));
            $dt = trim(strip_tags($request['dienthoai'])); 
            //lưu vào db
            $id_user = \DB::table('users')-> insertGetId([
                'email'=>$email,'ho'=>$ho,'ten'=>$ten,'diachi'=>$dc,'dienthoai'=>$dt,
                'password' => \Hash::make($matkhau1)
            ]);
            
            if(auth()->guard('web')->attempt(['email'=>$email,'password'=>$matkhau1])){
                // gửi mail
                $user = auth()->guard('web')->user();
                event(new Registered($user));
                return redirect('/dangnhap')->with('thongbao',"Đăng ký hoàn tất, Mời bạn đăng nhập"); 
            }
            else return back()->with('thongbao','Đăng ký không thành công');
         
    }
     
}
