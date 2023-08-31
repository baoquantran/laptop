@extends('layout')
@section('noidung')
<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">Danh sách bài viết</h1>
              <ol class="breadcrumb">
                <li><a href="index.html">Trang chủ</a></li>
                <li class="active">Danh sách bài viết</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section padding_layout_1 blog_grid">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
        <div class="full">
          <div class="blog_section">
            <div class="blog_feature_img"> <img class="img-responsive" src="images/it_service/22.jpg" alt="#"> </div>
            <div class="blog_feature_cantant">
              <p class="blog_head">Bài viết có Hình Ảnh</p>
              <div class="post_info">
                <ul>
                  <li><i class="fa fa-user" aria-hidden="true"></i> Tiếp thị</li>
                  <li><i class="fa fa-comment" aria-hidden="true"></i> 5</li>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i> 12 Tháng 8, 2017</li>
                </ul>
              </div>
              <p>Consectetur adipisicing elit. Quae laboriosam sunt hic perspiciatis, 
                asperiores mollitia excepturi voluptatibus sequi nostrum ipsam veniam omnis nihil! A ea maiores corporis. Lorem ipsum dolor sit amet, 
                consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
              <div class="bottom_info">
                <div class="pull-left"><a class="read_more" href="it_blog_detail.html">ĐỌC THÊM <i class="fa fa-angle-right"></i></a></div>
                <div class="pull-right">
                  <div class="shr">Chia sẻ: </div>
                  <div class="social_icon">
                    <ul>
                      <li class="fb"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                      <li class="twi"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                      <li class="gp"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                      <li class="pint"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Các phần bài viết tiếp theo có thể sao chép và dịch tương tự -->
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Kết thúc phần bài viết -->
<!-- Phần đánh giá từ khách hàng -->
<div class="section padding_layout_1 testmonial_section white_fonts">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_left">
            <h2 style="text-transform: none;">Nhận xét từ Khách hàng</h2>
            <p class="large">Dưới đây là những đánh giá từ khách hàng...</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-7">
        <div class="full">
          <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
            <!-- Chỉ số -->
            <ul class="carousel-indicators">
              <li data-target="#testimonial_slider" data-slide-to="0" class="active"></li>
              <li data-target="#testimonial_slider" data-slide-to="1"></li>
              <li data-target="#testimonial_slider" data-slide-to="2"></li>
            </ul>
            <!-- Slide show -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="testimonial-container">
                  <div class="testimonial-content"> Bạn đã làm rất tốt! Cảm ơn bạn đã làm cho nó dễ dàng, dễ chịu và quan trọng nhất là không gây phiền hà! Tôi ước mình đã nghĩ đến điều này trước. Tôi thực sự hài lòng với dịch vụ máy tính đầu tiên của mình.</div>
                  <div class="testimonial-photo"> <img src="images/it_service/client1.jpg" class="img-responsive" alt="#" width="150" height="150"> </div>
                  <div class="testimonial-meta">
                    <h4>Maria Anderson</h4>
                    <span class="testimonial-position">Tổng giám đốc tài chính, Tech NY</span> </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="testimonial-container">
                  <div class="testimonial-content"> Bạn đã làm rất tốt! Cảm ơn bạn đã làm cho nó dễ dàng, dễ chịu và quan trọng nhất là không gây phiền hà! Tôi ước mình đã nghĩ đến điều này trước. Tôi thực sự hài lòng với dịch vụ máy tính đầu tiên của mình.</div>
                  <div class="testimonial-photo"> <img src="images/it_service/client2.jpg" class="img-responsive" alt="#" width="150" height="150"> </div>
                  <div class="testimonial-meta">
                    <h4>Maria Anderson</h4>
                    <span class="testimonial-position">Tổng giám đốc tài chính, Tech NY</span> </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="testimonial-container">
                  <div class="testimonial-content"> Bạn đã làm rất tốt! Cảm ơn bạn đã làm cho nó dễ dàng, dễ chịu và quan trọng nhất là không gây phiền hà! Tôi ước mình đã nghĩ đến điều này trước. Tôi thực sự hài lòng với dịch vụ máy tính đầu tiên của mình.</div>
                  <div class="testimonial-photo"> <img src="images/it_service/client3.jpg" class="img-responsive" alt="#" width="150" height="150"> </div>
                  <div class="testimonial-meta">
                    <h4>Maria Anderson</h4>
                    <span class="testimonial-position">Tổng giám đốc tài chính, Tech NY</span> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-5">
        <div class="full"> </div>
      </div>
    </div>
  </div>
</div>
<!-- Kết thúc phần đánh giá -->
<!-- Phần liên hệ -->
<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="contact_us_section">
            <div class="call_icon"> <img src="images/it_service/phone_icon.png" alt="#" /> </div>
            <div class="inner_cont">
              <h2>YÊU CẦU BÁO GIÁ MIỄN PHÍ</h2>
              <p>Nhận câu trả lời và lời khuyên từ những người bạn muốn.</p>
            </div>
            <div class="button_Section_cont"> <a class="btn dark_gray_bt" href="it_contact.html">Liên hệ chúng tôi</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Kết thúc phần liên hệ -->
<!-- Các thương hiệu -->
<div class="section padding_layout_1" style="padding: 50px 0;">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <ul class="brand_list">
            <li><img src="images/it_service/brand_icon1.png" alt="#" /></li>
            <li><img src="images/it_service/brand_icon2.png" alt="#" /></li>
            <li><img src="images/it_service/brand_icon3.png" alt="#" /></li>
            <li><img src="images/it_service/brand_icon4.png" alt="#" /></li>
            <li><img src="images/it_service/brand_icon5.png" alt="#" /></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Kết thúc phần thương hiệu -->
<!-- Modal tìm kiếm -->
<div class="modal fade" id="search_bar" role="dialog">
  <div class="modal-dialog">
    <!-- Nội dung modal -->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-8 offset-lg-2 offset-md-2 offset-sm-2 col-xs-10 col-xs-offset-1">
            <div class="navbar-search">
              <form action="#" method="get" id="search-global-form" class="search-global">
                <input type="text" placeholder="Nhập từ khóa để tìm kiếm" autocomplete="off" name="s" id="search" value="" class="search-global__input">
                <button class="search-global__btn"><i class="fa fa-search"></i></button>
                <div class="search-global__note">Bắt đầu nhập từ khóa tìm kiếm ở trên và nhấn Enter để tìm kiếm.</div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Kết thúc modal tìm kiếm -->
@endsection
