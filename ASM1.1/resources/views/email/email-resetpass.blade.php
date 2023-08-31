@component('mail::message')
Hello {{$user->ten}},
<p>Chúng tôi sẽ giúp bạn về vấn đề của bạn. </p>
@component('mail::button',['url'=>url('reset-password/'.$user->remember_token)])
Đặt lại mật khẩu
@endcomponent
Thanks, <br>
{{config('app.name')}}
@endcomponent