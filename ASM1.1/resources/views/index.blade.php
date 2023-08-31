@extends('layout')

@section('tieudetrang')

@endsection
@section('noibat')
    @include('noibat')
@endsection
@section('noidung')
<div class="section padding_layout_1 light_silver gross_layout right_gross_layout">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_right">
            <h2>Phản hồi của chúng tôi</h2>
            <p class="large">Cách dễ dàng và hiệu quả để sửa chữa thiết bị của bạn.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row counter">
      <div class="col-md-4"> </div>
      <div class="col-md-8">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 margin_bottom_50">
            <div class="text_align_right"><i class="fa fa-smile-o"></i></div>
            <div class="text_align_right">
              <p class="counter-heading text_align_right">Khách hàng hài lòng</p>
            </div>
            <h5 class="counter-count">2150</h5>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 margin_bottom_50">
            <div class="text_align_right"><i class="fa fa-laptop"></i></div>
            <div class="text_align_right">
              <p class="counter-heading text_align_right">Laptop đã sửa chữa</p>
            </div>
            <h5 class="counter-count">1280</h5>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 margin_bottom_50">
            <div class="text_align_right"><i class="fa fa-desktop"></i></div>
            <div class="text_align_right">
              <p class="counter-heading">Máy tính đã sửa chữa</p>
            </div>
            <h5 class="counter-count">848</h5>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 margin_bottom_50">
            <div class="text_align_right"><i class="fa fa-windows"></i></div>
            <div class="text_align_right">
              <p class="counter-heading">Cài đặt hệ điều hành</p>
            </div>
            <h5 class="counter-count">450</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- kết thúc phần -->
<!-- phần -->
<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_left">
            <h2>Tin tức mới nhất từ Blog của chúng tôi</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="full blog_colum">
          <div class="blog_feature_img"> <img src="images/it_service/post-03.jpg" alt="#" /> </div>
          <div class="post_time">
            <p><i class="fa fa-clock-o"></i> 16 tháng 4, 2018 ( Đang bảo trì )</p>
          </div>
          <div class="blog_feature_head">
            <h4>Tại sao Máy tính của bạn ghét bạn</h4>
          </div>
          <div class="blog_feature_cont">
            <p>Lorem ipsum dolor sit amet, consectetur quam justo, pretium adipiscing elit. Vestibulum quam justo, pretium eu tempus ut, ...</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="full blog_colum">
          <div class="blog_feature_img"> <img src="images/it_service/post-04.jpg" alt="#" /> </div>
          <div class="post_time">
            <p><i class="fa fa-clock-o"></i> 16 tháng 4, 2018 ( Đang bảo trì )</p>
          </div>
          <div class="blog_feature_head">
            <h4>Gợi ý dễ dàng để sửa chữa máy tính</h4>
          </div>
          <div class="blog_feature_cont">
            <p>Lorem ipsum dolor sit amet, consectetur quam justo, pretium adipiscing elit. Vestibulum quam justo, pretium eu tempus ut, ...</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="full blog_colum">
          <div class="blog_feature_img"> <img src="images/it_service/post-06.jpg" alt="#" /> </div>
          <div class="post_time">
            <p><i class="fa fa-clock-o"></i> 16 tháng 4, 2018 ( Đang bảo trì )</p>
          </div>
          <div class="blog_feature_head">
            <h4>Bảo dưỡng máy tính 2018</h4>
          </div>
          <div class="blog_feature_cont">
            <p>Lorem ipsum dolor sit amet, consectetur quam justo, pretium adipiscing elit. Vestibulum quam justo, pretium eu tempus ut, ...</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- kết thúc phần -->
<!-- phần -->
<div class="section padding_layout_1 testmonial_section white_fonts">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_left">
            <h2 style="text-transform: none;">Khách hàng nói gì?</h2>
            <p class="large">Dưới đây là những lời chia sẻ từ khách hàng..</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-7">
        <div class="full">
          <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
            <!-- Các chỉ số -->
            <ul class="carousel-indicators">
              <li data-target="#testimonial_slider" data-slide-to="0" class="active"></li>
              <li data-target="#testimonial_slider" data-slide-to="1"></li>
              <li data-target="#testimonial_slider" data-slide-to="2"></li>
            </ul>
            <!-- Diễn biến -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="testimonial-container">
                  <div class="testimonial-content"> Bạn làm việc rất xuất sắc! Cảm ơn bạn đã làm cho nó trở nên dễ dàng, dễ chịu và quan trọng nhất là không gây phiền hà! Tôi ước mình đã nghĩ đến nó trước đây.
                    Tôi thực sự hài lòng với dịch vụ sửa chữa laptop đầu tiên của mình. </div>
                  <div class="testimonial-photo"> <img src="images/it_service/client1.jpg" class="img-responsive" alt="#" width="150" height="150"> </div>
                  <div class="testimonial-meta">
                    <h4>Maria Anderson</h4>
                    <span class="testimonial-position">CFO, Tech NY</span> </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="testimonial-container">
                  <div class="testimonial-content"> Bạn làm việc rất xuất sắc! Cảm ơn bạn đã làm cho nó trở nên dễ dàng, dễ chịu và quan trọng nhất là không gây phiền hà! Tôi ước mình đã nghĩ đến nó trước đây.
                    Tôi thực sự hài lòng với dịch vụ sửa chữa laptop đầu tiên của mình. </div>
                  <div class="testimonial-photo"> <img src="images/it_service/client2.jpg" class="img-responsive" alt="#" width="150" height="150"> </div>
                  <div class="testimonial-meta">
                    <h4>Maria Anderson</h4>
                    <span class="testimonial-position">CFO, Tech NY</span> </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="testimonial-container">
                  <div class="testimonial-content"> Bạn làm việc rất xuất sắc! Cảm ơn bạn đã làm cho nó trở nên dễ dàng, dễ chịu và quan trọng nhất là không gây phiền hà! Tôi ước mình đã nghĩ đến nó trước đây.
                    Tôi thực sự hài lòng với dịch vụ sửa chữa laptop đầu tiên của mình. </div>
                  <div class="testimonial-photo"> <img src="images/it_service/client3.jpg" class="img-responsive" alt="#" width="150" height="150"> </div>
                  <div class="testimonial-meta">
                    <h4>Maria Anderson</h4>
                    <span class="testimonial-position">CFO, Tech NY</span> </div>
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
<!-- kết thúc phần -->
<!-- phần -->
<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="contact_us_section">
            <div class="call_icon"> <img src="images/it_service/phone_icon.png" alt="#" /> </div>
            <div class="inner_cont">
              <h2>YÊU CẦU BÁO GIÁ MIỄN PHÍ</h2>
              <p>Nhận câu trả lời và lời khuyên từ những người bạn muốn nghe.</p>
            </div>
            <div class="button_Section_cont"> <a class="btn dark_gray_bt" href="it_contact.html">Liên hệ chúng tôi</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- kết thúc phần -->
<!-- phần -->
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
<!-- kết thúc phần -->
<!-- Cửa sổ modal -->
<div class="modal fade" id="search_bar" role="dialog">
  <div class="modal-dialog">
    <!-- Nội dung của cửa sổ modal -->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-8 offset-lg-2 offset-md-2 offset-sm-2 col-xs-10 col-xs-offset-1">
            <div class="navbar-search">
              <form action="#" method="get" id="search-global-form" class="search-global">
                <input type="text" placeholder="Nhập để tìm kiếm" autocomplete="off" name="s" id="search" value="" class="search-global__input">
                <button class="search-global__btn"><i class="fa fa-search"></i></button>
                <div class="search-global__note">Bắt đầu nhập tìm kiếm của bạn ở trên và nhấn Enter để tìm kiếm.</div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection