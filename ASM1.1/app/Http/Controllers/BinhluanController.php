<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BinhluanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cmt = DB::table('binhluan')
        ->join('sanpham','sanpham.id_sp','=','binhluan.id_sp')
        ->join('users','binhluan.id_user','=','users.id_user')
        ->get();
        return view('admin/dsbinhluan',['cmt'=>$cmt]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, Request $request)
    {
        $cmt = DB::table('binhluan')
        ->join('sanpham','sanpham.id_sp','=','binhluan.id_sp')
        ->join('users','binhluan.id_user','=','users.id_user')->count();
        
        DB::table('binhluan')->where('id_bl', $id)->delete();
        $request->session()->flash('thongbao', 'Đã xóa bình luận');
        return redirect('/admin/binhluan');
    }
}
