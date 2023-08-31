<div id="navbar_menu">
  <ul class="first-ul">
    <li> <a class="active" href="/">Trang Chủ</a>
    </li>
    <li><a href="it_about.html">Giới thiệu</a></li>
    <li> <a href="/blog">Blog</a>
    </li>
    <li> <a href="/cat">Cửa hàng</a>
      <ul>
        @foreach ($type as $t)
        <li><a href="{{url('cat',$t->id_sp)}}">{{$t->ten_loai}}</a></li>
        <?php
        ?>
        @endforeach
      </ul>
    </li>
    <li> <a href="it_contact.html">Liên hệ</a>
    </li>
    <li>
      @if (Auth::check())
      <a href="#" class="text-danger">
        {{Auth::user()->ho}} {{Auth::user()->ten}}
      </a>
      <ul>
        <li><a href="/userinfo">Thông tin tài khoản</a></li>
        <li><a href="/thoat">Thoát</a></li>
      </ul>
      @else
        <a href="/dangnhap">Đăng nhập</a>
      @endif
    </li>
  </ul>
</div>
