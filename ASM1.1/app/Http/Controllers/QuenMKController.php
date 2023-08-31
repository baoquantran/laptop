<?php

namespace App\Http\Controllers;

use App\Mail\Quenmatkhau;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class QuenMKController extends Controller
{
    function quenmk(){
        return view('forgot');
    }
    function quenmk_(Request $request){
        $user = User::getUsersingle($request->email);

        if(!empty($user)){
            $user->remember_token = Str::random(30);
            $user->save();
            Mail::to($user->email)->send(new Quenmatkhau($user));
            return redirect()->back()->with('thongbao','Đã gửi mail');
        }else
        return redirect()->back()->with('thongbao','Email không tồn tại');
    }
    function resetpass($remember_token){
        $user = User::getTokenSingle($remember_token);
        if(!empty($user)){
            $data['user'] = $user;
            return view('resetpass',$data);
        }else{
            abort(404);
        }
    }
    function resetpass_($token, Request $request){
        if($request->matkhau1 == $request->matkhau2){
            $user = User::getTokenSingle($token);
            $user->password = Hash::make($request->matkhau1);
            $user->remember_token = Str::random(30);
            $user->save();


            return redirect('/dangnhap')->with('thongbao','Đổi mật khẩu thành công');
        }else{
            return redirect()->back()->with('thongbao','Mật khẩu và xác nhận không giống nhau');
        }
    }
}