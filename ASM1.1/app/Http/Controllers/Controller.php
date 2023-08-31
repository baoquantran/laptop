<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    function __construct()
    {
        $type = DB::table('loai')
        ->join( 'sanpham','sanpham.id_loai','=','loai.id_loai')
        ->select('sanpham.id_sp','loai.ten_loai')
        ->limit(12)
        ->get();
       \View::share('type',$type);
    }
    function contact(){
        return view('contact');
    }
    function userinfo(){
        return view('userinfo');
    }
    function blog(){
        return view('blog');
    }
}
