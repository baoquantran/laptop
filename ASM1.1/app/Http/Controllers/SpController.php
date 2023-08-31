<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
Paginator::useBootstrap();

class SpController extends Controller
{
    function __construct()
    {
        $type = DB::table('loai')
        ->join( 'sanpham','sanpham.id_loai','=','loai.id_loai')
        ->select('sanpham.id_sp','loai.ten_loai')
        ->limit(12)
        ->get();
       \View::share('type',$type);
    }
    function index(){
        $product = DB::table('sanpham')
        ->join( 'loai','sanpham.id_loai','=','loai.id_loai')
        ->where('sanpham.hot',1)
        ->limit('12')
        ->orderBy('sanpham.ngay','desc')
        ->get();
        return view('index',['product'=>$product]);
    } 
    function catmain(){
    $perpage =12;
    $cat = DB::table('loai')
    ->join( 'sanpham','sanpham.id_loai','=','loai.id_loai')
    ->select('sanpham.id_sp','loai.ten_loai','sanpham.hinh','sanpham.ten_sp','sanpham.gia','sanpham.gia_km','loai.ten_loai','loai.id_loai')
    ->paginate($perpage)->withQueryString();
    
    return view('catmain',['cat'=>$cat]);
    }
    function cat($id){
        $perpage=12;
        $listtype = DB::table('loai')
        ->where('sanpham.id_loai',$id)
        ->join( 'sanpham','sanpham.id_loai','=','loai.id_loai')
        ->select('sanpham.id_sp','loai.ten_loai','sanpham.hinh','sanpham.ten_sp','sanpham.gia','sanpham.gia_km','loai.ten_loai','loai.id_loai')
        ->paginate($perpage)->withQueryString();

        
        return view('cat',['listtype'=>$listtype]);
    }
    function detail($id,$idloai){
    
        $prdetail = DB::table('sanpham') 
        ->where('sanpham.id_sp',$id)
        ->join('loai','sanpham.id_loai','=','loai.id_loai')
        ->select('sanpham.*','loai.*')
        ->first();

       
        
        

        $related= DB::table('sanpham')
        ->join('loai','sanpham.id_loai','=','loai.id_loai')
        ->where('sanpham.id_loai',$idloai)
        ->select('sanpham.*','loai.*')
        ->limit(3)
        ->orderBy('sanpham.soluotxem','desc')
        ->get();
        

        $binhluan = DB::table('binhluan')
        ->where('binhluan.id_sp',$id)
        ->join('sanpham','sanpham.id_sp','=','binhluan.id_sp')
        ->join('users','binhluan.id_user','=','users.id_user')
        ->get();

       
        $data = [
            'prdetail' => $prdetail,
            'related' => $related,
            'binhluan' => $binhluan,
        ];
        
        return view('detail',$data);
    }

    function binhluan(Request $request){
        
        $id_sp = $request['id_sp'];
        $id_user = (int) $request['id_user'];
        $noidung = $request['noidung'];
        $thoidiem = $request['thoidiem'];
        $cmt = DB::table('binhluan')
        ->insert([
            'id_sp'=>$id_sp,
            'id_user'=>$id_user,
            'noidung'=>$noidung,
            'thoidiem' => $thoidiem
            ]);
        return redirect()->back();
    }
    function addcart(Request $request, $id_sp = 0, $soluong = 1){
        if($request->session()->exists('cart') == false){
            $request->session()->push('cart', ['id_sp'=> $id_sp,'soluong'=> $soluong]);
        }else{// đã có cart, kiểm tra id_sp có trong cart không
            $cart =  $request->session()->get('cart'); 
            $index = array_search($id_sp, array_column($cart, 'id_sp'));
            if ($index!=''){ //id_sp có trong giỏ hàng thì tăhg số lượng
                $cart[$index]['soluong']+=$soluong;
                $request->session()->put('cart', $cart);
            } else { //sp chưa có trong arrary cart thì thêm vào 
                $cart[]= ['id_sp'=> $id_sp, 'soluong'=> $soluong];
                $request->session()->put('cart', $cart);
            }
        }
        return redirect('/showcart');
        
    }


    function showcart(Request $request){
        $cart =  $request->session()->get('cart'); 
        return view('cart', ['cart'=> $cart]);
    }

    function delcart(Request $request, $id_sp=0){
        $cart =  $request->session()->get('cart'); 
        $index = array_search($id_sp, array_column($cart, 'id_sp'));
        if ($index!=''){ 
            array_splice($cart, $index, 1);
            $request->session()->put('cart', $cart);
        }
        return redirect('/showcart');
    }
}
