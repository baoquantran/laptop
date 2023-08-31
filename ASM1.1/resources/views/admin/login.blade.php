<!DOCTYPE html>
<html class="no-js" lang="vi">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Đăng nhập | Nalika - Giao diện quản trị Material</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="/admin/css/bootstrap.min.css">
    <!-- Font Awesome CSS
        ============================================ -->
    <link rel="stylesheet" href="/admin/css/font-awesome.min.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="/admin/css/owl.carousel.css">
    <link rel="stylesheet" href="/admin/css/owl.theme.css">
    <link rel="stylesheet" href="/admin/css/owl.transitions.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="/admin/css/animate.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="/admin/css/normalize.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="/admin/css/main.css">
    <!-- morrisjs CSS
        ============================================ -->
    <link rel="stylesheet" href="/admin/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="/admin/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
        ============================================ -->
    <link rel="stylesheet" href="/admin/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="/admin/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
        ============================================ -->
    <link rel="stylesheet" href="/admin/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="/admin/css/calendar/fullcalendar.print.min.css">
    <!-- forms CSS
        ============================================ -->
    <link rel="stylesheet" href="/admin/css/form/all-type-forms.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="/admin/css/style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="/admin/css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">Bạn đang sử dụng một trình duyệt <strong>lỗi thời</strong>. Vui lòng <a href="http://browsehappy.com/">nâng cấp trình duyệt của bạn</a> để cải thiện trải nghiệm.</p>
        <![endif]-->

    <div class="color-line"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="back-link back-backend">
                    <a href="/" class="btn btn-primary">Quay lại trang chủ</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4 col-md-4 col-sm-4 col-xs-12">
                <div class="text-center m-b-md custom-login">
                    <h3>VUI LÒNG ĐĂNG NHẬP VÀO ỨNG DỤNG</h3>
                    <p>Đây là ứng dụng tốt nhất từ trước đến nay!</p>
                </div>
                <div class="hpanel">
                    <div class="panel-body">
                        <form action="{{url('admin/dangnhap')}}" method="post" id="loginForm">
                              @if(Session::exists('thongbao'))
                                <h5 class="alert alert-info text-center"> {{ Session::get('thongbao') }} </h5>
                              @endif
                            <div class="form-group"> @csrf
                                <label class="control-label" for="Emial">Email</label>
                                <input type="text" placeholder="Nhập email của bạn" title="Vui lòng nhập tên đăng nhập của bạn" required="" value="" name="email" id="username" class="form-control">
                                <span class="help-block small">Tên đăng nhập duy nhất của bạn cho ứng dụng</span>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Mật khẩu</label>
                                <input type="password" title="Vui lòng nhập mật khẩu của bạn" placeholder="Nhập mật khẩu" required="" value="" name="matkhau" id="password" class="form-control">
                                <span class="help-block small">Mật khẩu mạnh của bạn</span>
                            </div>
                            <center>
                            <div class="checkbox login-checkbox">
                                <label >
										<input type="checkbox" class="i-checks"> Ghi nhớ tôi </label>
                                <p class="help-block small">(nếu đây là máy tính riêng)</p>
                            </div>
                            </center>
                            <button class="btn btn-success btn-block loginbtn">Đăng nhập</button>
                            <a class="btn btn-default btn-block" href="/">Quay trở lại trang chủ</a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        </div>
        <div class="row">
            <div class="col-md-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <p>Bản quyền © 2018 <a href="https://colorlib.com/wp/templates/">Colorlib</a> Đã đăng ký bản quyền.</p>
            </div>
        </div>
    </div>

    <!-- jquery
        ============================================ -->
    <script src="js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
        ============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- tab JS
        ============================================ -->
    <script src="js/tab.js"></script>
    <!-- icheck JS
        ============================================ -->
    <script src="js/icheck/icheck.min.js"></script>
    <script src="js/icheck/icheck-active.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="js/main.js"></script>
</body>

</html>
