@extends('layout')

@section('noidung')

<div class="text-center pb-5">
    <b class="text-danger">
    Bạn chưa xác thực email. <br>
    Hãy kiểm tra email và nhắp nút xác thực email để hoàn thành đăng ký tài khoản
</b>
</div>
<form action="{{route('verification.send')}}" method="post" class=" text-center" > @csrf 
<button type="submit" class="btn btn-primary "> Gửi lại email xác thực</button>
</form>
@endsection