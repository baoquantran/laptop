<div class="row">
  <div class="col-md-12">
    <div class="full">
      <div class="main_heading text_align_center">
        <h2>Sản phẩm của chúng tôi</h2>
        <p class="large">Chúng tôi đóng gói sản phẩm kèm theo dịch vụ tốt nhất để làm bạn trở thành một khách hàng hạnh phúc.</p>
      </div>
    </div>
  </div>
</div>
<div class="row">
  @foreach($product as $pr)
  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
    <div class="product_list">
      <div class="product_img"> <img class="img-responsive" src="{{$pr->hinh}}" alt=""> </div>
      <div class="product_detail_btm">
        <div class="center">
          <h4><a href="{{url('detail',[$pr->id_sp,$pr->id_loai])}}">{{$pr->ten_sp}}</a></h4>
        </div>
        <div class="center">
          <h6><a href="{{url('detail',$pr->id_sp)}}">Loại: {{$pr->ten_loai}}</a></h6>
        </div>
        <div class="starratin">
          <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
        </div>
        <div class="product_price">
          <p><span class="old_price">{{ number_format( $pr->gia_km , 0 , "," , ".") }}</span> – <span class="new_price">{{ number_format( $pr->gia , 0 , "," , ".") }}</span></p>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>
