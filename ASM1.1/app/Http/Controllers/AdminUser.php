<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminUser extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = DB::table('users')->get();
        return view('admin/dsuser',['user'=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = DB::table('users')->get();
        return view('admin/themuser',['user'=>$user]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ho = $request['ho'];
        $ten = $request['ten'];
        $password = $request['password'];
        $email = $request['email'];
        $diachi = $request['diachi'];
        $vaitro = $request['vaitro'];
        $dienthoai = $request['dienthoai'];

        DB::table('users')->insert([
            'ho'=>$ho,
            'ten'=>$ten,
            'password'=>Hash::make($password),
            'email'=>$email,
            'diachi'=>$diachi,
            'vaitro'=>$vaitro,
            'dienthoai'=>$dienthoai,
        ]);
        return redirect('admin/user');
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
    public function edit(Request $request, string $id)
    {
        $user = DB::table('users')
        ->where('id_user',$id)
        ->first();
        if ($user==null){
            $request->session()->flash('thongbao','Không có user này: '. $id);
            return redirect('/admin/user');
        }
        return view('admin/suauser',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ho = $request['ho'];
        $ten = $request['ten'];
        $password = $request['password'];
        $email = $request['email'];
        $diachi = $request['diachi'];
        $vaitro = $request['vaitro'];
        $dienthoai = $request['dienthoai'];

        DB::table('users')
        ->where('id_user',$id)
        ->update([
            'ho'=>$ho,
            'ten'=>$ten,
            'password'=>Hash::make($password),
            'email'=>$email,
            'diachi'=>$diachi,
            'vaitro'=>$vaitro,
            'dienthoai'=>$dienthoai,
        ]);
        return redirect('admin/user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $user = DB::table('users')->where('id_user',$id)->count();
        if($user == null){
            $request->session()->flash('thongbao','Đã xóa user thành công');
            return redirect('admin/user');
        }
        DB::table('users')->where('id_user',$id)->delete();
        $request->session()->flash('thongbao','Đã xóa user thành công');
        return redirect('admin/user');
    }
}
