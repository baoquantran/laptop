@extends('layout')

@section('tieudetrang')

@endsection

@section('noidung')
<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">Sản phẩm chi tiết</h1>
              <ol class="breadcrumb">
                <li><a href="/">Trang chủ</a></li>
                <li><a href="#">Cửa hàng</a></li>
                <li class="active">{{$prdetail->ten_sp}}</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Kết thúc banner trang nội bộ -->
<!-- Phần -->
<div class="section padding_layout_1 product_detail">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="row">
          <div class="col-xl-6 col-lg-12 col-md-12">
            <div class="product_detail_feature_img hizoom hi2">
              <div class='hizoom hi2'> <img src="{{$prdetail->hinh}}" height="350px" width="100%" alt="#" /> </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-12 col-md-12 product_detail_side detail_style1">
            <div class="product-heading">
              <h2>{{$prdetail->ten_sp}}</h2>
            </div>
            <div class="product-heading">
              <h6>{{$prdetail->ten_loai}}</h6>
            </div>
            <div class="product-detail-side"> <span><del>{{number_format($prdetail->gia_km, 0,'',',')}}</del></span><span class="new-price">{{number_format($prdetail->gia, 0,'',',')}}</span> <span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span> <span class="review">(5 đánh giá)</span> </div>
            <div class="detail-contant">
              <p>{{$prdetail->mota}}<br>
                <span class="stock">Còn 2 sản phẩm</span> </p>
      
                <div class="quantity">
                  <input step="1" min="1" max="5" name="quantity" value="1" title="Số lượng" class="input-text qty text" size="4" type="number">
                </div>

                <a href="{{url('addtocart',$prdetail->id_sp)}}/1"><button type="submit" class="btn sqaure_bt">Thêm vào giỏ hàng</button></a>
              
            </div>
            <div class="share-post"> <a href="#" class="share-text">Chia sẻ</a>
              <ul class="social_icons">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="full">
              <div class="tab_bar_section">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#description">Mô tả</a> </li>
                  <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#reviews">Đánh giá</a> </li>
                </ul>
                <!-- Nội dung tab -->
                <div class="tab-content">
                  <div id="description" class="tab-pane active">
                    <div class="product_desc">
                    {{$prdetail->mota}}
                    </div>
                  </div>
                  <div id="reviews" class="tab-pane fade">
                    <div class="product_review">
                      <h3>Đánh giá</h3>
                    
                        @foreach($binhluan as $b)
                        <div class="commant-text row">
                          <div class="col-lg-2 col-md-2 col-sm-4">
                            <div class="profile"> <img class="img-responsive" src="https://static.vecteezy.com/system/resources/previews/000/439/863/original/vector-users-icon.jpg" alt="#"> </div>
                          </div>
                          <div class="col-lg-10 col-md-10 col-sm-8">
                            <h5>{{$b->ho}} {{$b->ten}}</h5>
                            <p><span class="c_date">{{$b->thoidiem}}</span> | <span><a rel="nofollow" class="comment-reply-link" href="#">Trả lời</a></span></p>
                            <span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span>
                            <p class="msg">{{$b->noidung}}</p>
                          </div>
                        </div>
                      @endforeach
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="full review_bt_section">
                              <div class="float-right"> <a class="btn sqaure_bt" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Để lại đánh giá</a> </div>
                            </div>
                            <div class="full">
                              <div id="collapseExample" class="full collapse commant_box">
                                @if(Auth::check())
                                <form  action="/binhluan" method="post"> 
                                @csrf
                                  <input id="ratings-hidden" name="rating" type="hidden">
                                  <input hidden name="id_sp" value="{{$prdetail->id_sp}}" type="text">
                                  <input type="text" hidden name="id_user" value="{{Auth::user()->id_user}}">
                                  <input type="datetime-local" name="thoidiem" id="thoidiem" hidden value="">
                                  <script>
                                    var inputElement = document.getElementById("thoidiem");
                                    var currentDateTime = new Date();

                                    // Chuyển định dạng ngày tháng năm và giờ thành yyyy-MM-ddTHH:mm (định dạng của input type="datetime-local")
                                    var formattedDateTime = currentDateTime.toISOString().substr(0, 16);

                                    inputElement.value = formattedDateTime;
                                  </script>
                                  <textarea  class="form-control animated" cols="50" id="new-review" name="noidung" placeholder="Nhập đánh giá của bạn..." required=""></textarea>
                                  <div class="full_bt center">
                                    <button class="btn sqaure_bt" type="submit">Lưu</button>
                                  </div>
                                </form>
                                @else
                                <center>
                                <a class="btn btn-primary m-1"  href="/dangnhap">Đăng nhập để bình luận</a> </center>
                                @endif
                                
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="full">
              <div class="main_heading text_align_left" style="margin-bottom: 35px;">
                <h3>Sản phẩm liên quan</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          @foreach($related as $r)
          <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_30_all">
            <div class="product_list">
              <div class="product_img"> <img class="img-responsive" src='{{$r->hinh}}' alt=""> </div>
              <div class="product_detail_btm">
                <div class="center">
                  <h4><a href="{{url('detail',[$r->id_sp,$r->id_loai])}}">{{$r->ten_sp}}</a></h4>
                </div>
                <div class="center">
                  <h6><a href="it_shop_detail.html">{{$r->ten_loai}}</a></h6>
                </div>
                <div class="starratin">
                  <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                </div>
                <div class="product_price">
                <p><span class="old_price">{{ number_format( $r->gia_km , 0 , "," , ".") }}</span> – <span class="new_price">{{ number_format( $r->gia , 0 , "," , ".") }}</span></p>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      <div class="col-md-3">
        <div class="side_bar">
          <div class="side_bar_blog">
            <h4>TÌM KIẾM</h4>
            <div class="side_bar_search">
              <div class="input-group stylish-input-group">
                <input class="form-control" placeholder="Tìm kiếm" type="text">
                <span class="input-group-addon">
                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </span> </div>
            </div>
          </div>
          <div class="side_bar_blog">
            <h4>YÊU CẦU BÁO GIÁ</h4>
            <p>An duo lorem altera gloriatur. No imperdiet adver sarium pro. No sit sumo lorem. Mei ea eius elitr consequ unturimperdiet.</p>
            <a class="btn sqaure_bt" href="it_service.html">Xem dịch vụ</a> </div>
          <div class="side_bar_blog">
            <h4>DỊCH VỤ CỦA CHÚNG TÔI</h4>
            <div class="categary">
              <ul>
                <li><a href="it_data_recovery.html"><i class="fa fa-angle-right"></i> Khôi phục dữ liệu</a></li>
                <li><a href="it_computer_repair.html"><i class="fa fa-angle-right"></i> Sửa chữa máy tính</a></li>
                <li><a href="it_mobile_service.html"><i class="fa fa-angle-right"></i> Dịch vụ điện thoại di động</a></li>
                <li><a href="it_network_solution.html"><i class="fa fa-angle-right"></i> Giải pháp mạng</a></li>
                <li><a href="it_techn_support.html"><i class="fa fa-angle-right"></i> Hỗ trợ kỹ thuật</a></li>
              </ul>
            </div>
          </div>
          <div class="side_bar_blog">
            <h4>TIN TỨC GẦN ĐÂY</h4>
            <div class="categary">
              <ul>
                <li><a href="it_data_recovery.html"><i class="fa fa-angle-right"></i> Đèn đất được chia thành</a></li>
                <li><a href="it_computer_repair.html"><i class="fa fa-angle-right"></i> Mùa vượt quá không khí</a></li>
                <li><a href="it_mobile_service.html"><i class="fa fa-angle-right"></i> Lớn hơn sau cỏ</a></li>
                <li><a href="it_network_solution.html"><i class="fa fa-angle-right"></i> Tập hợp là chia là thứ hai</a></li>
              </ul>
            </div>
          </div>
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
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
