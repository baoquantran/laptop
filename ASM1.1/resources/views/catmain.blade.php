@extends('layout')

@section('tieudetrang')

@endsection

@section('noidung')
<!-- Phần banner trang nội bộ -->
<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">Trang Cửa hàng</h1>
              <ol class="breadcrumb">
                <li><a href="index.html">Cửa hàng</a></li>
                
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Kết thúc phần banner trang nội bộ -->

<!-- Phần danh sách sản phẩm -->
<div class="section padding_layout_1 product_list_main">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="row">
          @foreach($cat as $c)
            <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_30_all">
              <div class="product_list">
                <div class="product_img"> <img class="img-responsive" src='{{$c->hinh}}' alt=""> </div>
                <div class="product_detail_btm">
                  <div class="center">
                    <h4><a href="{{url('detail',[$c->id_sp,$c->id_loai])}}">{{$c->ten_sp}}</a></h4>
                  </div>
                  <div class="center">
                    <h6><a href="">{{$c->ten_loai}}</a></h6>
                  </div>
                  <div class="starratin">
                    <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                  </div>
                  <div class="product_price">
                    <p><span class="old_price">{{ number_format( $c->gia_km , 0 , "," , ".") }}</span> – <span class="new_price">{{ number_format( $c->gia , 0 , "," , ".") }}</span></p>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
        <center><div class="p-2">{{ $cat->onEachSide(1)->links() }}</div></center>
      </div>
      
      <div class="col-md-3">
        <div class="side_bar">
          <!-- Phần tìm kiếm -->
          <div class="side_bar_blog">
            <h4>TÌM KIẾM</h4>
            <div class="side_bar_search">
              <div class="input-group stylish-input-group">
                <input class="form-control" placeholder="Tìm kiếm" type="text">
                <span class="input-group-addon">
                  <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </span>
              </div>
            </div>
          </div>
          <!-- Kết thúc phần tìm kiếm -->

          <!-- Phần yêu cầu báo giá -->
          <div class="side_bar_blog">
            <h4>YÊU CẦU BÁO GIÁ</h4>
            <p>Dễ dàng và hiệu quả để sửa chữa thiết bị của bạn.</p>
            <a class="btn sqaure_bt" href="it_service.html">Xem Dịch Vụ</a>
          </div>
          <!-- Kết thúc phần yêu cầu báo giá -->

          <!-- Phần dịch vụ của chúng tôi -->
          <div class="side_bar_blog">
            <h4>DỊCH VỤ CỦA CHÚNG TÔI</h4>
            <div class="categary">
              <ul>
                <li><a href="it_data_recovery.html"><i class="fa fa-angle-right"></i> Khôi phục dữ liệu</a></li>
                <li><a href="it_computer_repair.html"><i class="fa fa-angle-right"></i> Sửa chữa máy tính</a></li>
                <li><a href="it_mobile_service.html"><i class="fa fa-angle-right"></i> Dịch vụ di động</a></li>
                <li><a href="it_network_solution.html"><i class="fa fa-angle-right"></i> Giải pháp mạng</a></li>
                <li><a href="it_techn_support.html"><i class="fa fa-angle-right"></i> Hỗ trợ kỹ thuật</a></li>
              </ul>
            </div>
          </div>
          <!-- Kết thúc phần dịch vụ của chúng tôi -->

          <!-- Phần tin tức gần đây -->
          <div class="side_bar_blog">
            <h4>TIN TỨC GẦN ĐÂY</h4>
            <div class="categary">
              <ul>
                <li><a href="it_data_recovery.html"><i class="fa fa-angle-right"></i> Đèn đất để chia cắt</a></li>
                <li><a href="it_computer_repair.html"><i class="fa fa-angle-right"></i> Mùa ánh sáng mở cửa</a></li>
                <li><a href="it_mobile_service.html"><i class="fa fa-angle-right"></i> Lớn hơn sau bãi cỏ</a></li>
                <li><a href="it_network_solution.html"><i class="fa fa-angle-right"></i> Tập trung chia thành hai phần</a></li>
              </ul>
            </div>
          </div>
          <!-- Kết thúc phần tin tức gần đây -->

          <!-- Phần thẻ -->
          <div class="side_bar_blog">
            <h4>THẺ</h4>
            <div class="tags">
              <ul>
                <li><a href="#">Bootstrap</a></li>
                <li><a href="#">HTML5</a></li>
                <li><a href="#">Wordpress</a></li>
                <li><a href="#">Bootstrap</a></li>
                <li><a href="#">HTML5</a></li>
              </ul>
            </div>
          </div>
          <!-- Kết thúc phần thẻ -->
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Kết thúc phần danh sách sản phẩm -->

@endsection