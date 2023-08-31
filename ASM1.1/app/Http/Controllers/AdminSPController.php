<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
Paginator::useBootstrap();

class AdminSPController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $perpage = 12;
        $sanpham = DB::table('sanpham')
        ->join('loai','loai.id_loai','=','sanpham.id_loai')
        ->orderBy('sanpham.id_sp','asc')
        ->paginate($perpage)->withQueryString();
        return view('admin/dssanpham',['sanpham'=>$sanpham]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $listloai = \DB::table('loai')->orderBy('thutu')->get();
        return view('admin/themsp',['listloai'=>$listloai]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $ten_sp = $request['ten_sp'];
        $hinh = $request['hinh'];
        $gia = (int) $request['gia'];
        $gia_km = (int) $request['gia_km'];
        $tinhchat = (int) $request['tinhchat'];
        $id_loai = (int) $request['id_loai'];
        $ngay = $request['ngay'];       
        $anhien = (int) $request['anhien'];
        $hot = (int) $request['hot'];
        $mota = $request['mota'];   
        \DB::table('sanpham')->insert([
            'ten_sp'=>$ten_sp,'hinh'=>$hinh,'gia'=>$gia, 'gia_km'=>$gia_km, 
            'tinhchat'=>$tinhchat, 'id_loai'=>$id_loai, 'ngay'=>$ngay, 
            'anhien'=>$anhien, 'hot'=>$hot, 'mota'=>$mota
        ]);
        return redirect('/admin/sanpham');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( Request $request , string $id) {
        $listloai = \DB::table('loai')->orderBy('thutu')->get();
        $sp = \DB::table('sanpham')
        ->where('sanpham.id_sp', $id)
        ->first();
        if ($sp==null){
            $request->session()->flash('thongbao','Không có sản phẩm này: '. $id);
            return redirect('/admin/sanpham');
        }
        return view('admin/suasp' , ['sp'=>$sp],['listloai'=>$listloai]);
    }

    public function update(Request $request, string $id) {
        $ten_sp = $request['ten_sp'];
        $gia = (int) $request['gia'];
        $gia_km = (int) $request['gia_km'];
        $anhien = (int) $request['anhien'];
        $hot = (int) $request['hot'];
        $id_loai = (int) $request['id_loai'];
        $tinhchat = (int) $request['tinhchat'];
        $ngay = $request['ngay']; 
        $hinh =  $request['hinh']; 
        $mota = $request['mota'];
        \DB::table('sanpham')->where('id_sp', $id)
        ->update([
            'ten_sp'=>$ten_sp,'gia'=>$gia,'gia_km'=>$gia_km,
            'anhien'=>$anhien,'hot'=>$hot,'id_loai'=>$id_loai,
            'tinhchat'=>$tinhchat,'ngay'=>$ngay,'hinh'=> '/upload/images/'.$hinh,'mota'=>$mota,
        ]);
        return redirect('/admin/sanpham');
    }

    
    public function destroy( Request $request, string $id) {
        //echo "Xoa = ", $id;
        $sosp = \DB::table('sanpham')->where('id_sp', $id)->count();
        if ($sosp==0) {
            $request->session()->flash('thongbao','Sản phẩm không tồn tại');
            return redirect('/admin/sanpham');
        }
        \DB::table('sanpham')->where('id_sp', $id)->delete();
        $request->session()->flash('thongbao', 'Đã xóa sản phẩm');
        return redirect('/admin/sanpham');
    }
}
