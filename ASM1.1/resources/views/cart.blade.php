@extends('layout')
@section('tieudetrang')
Giỏ Hàng
@endsection
@section('noidung')
<div class="section padding_layout_1 Shopping_cart_section">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12">
        <div class="product-table pb-5">
          <table class="table">
            <thead>
              <tr>
                <th>Sản phẩm</th>
                <th>Số lượng</th>
                <th class="text-center">Giá</th>
                <th class="text-center">Tổng tiền</th>
                <th> </th>
              </tr>
            </thead>
            <tbody>
            <?php
                $tongtien=0; $tongsoluong=0;
                foreach( $cart as $c ) {
                $id_sp = $c['id_sp'];            
                $soluong = $c['soluong'];
                $ten_sp = \DB::table('sanpham')->where('id_sp', '=', $id_sp)-> value('ten_sp');
                $gia = \DB::table('sanpham')->where('id_sp', '=', $id_sp)-> value('gia');
                $hinh = \DB::table('sanpham')->where('id_sp', '=', $id_sp)-> value('hinh');
                
                $thanhtien = $gia*$soluong;
                $tongtien+=$thanhtien; 
                $tongsoluong+=$soluong; 
                $thanhtien = number_format($thanhtien,0,',','.') ;
                $gia = number_format($gia,0,',','.') ;
                echo '
                <tr>
                <td class="col-sm-8 col-md-6"><div class="media"> <a class="thumbnail pull-left" href="#"> <img class="media-object" height="150px" src="'.$hinh.'" alt="#"></a>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="#">'.$ten_sp.'</a></h4>
                      <span>Status: </span><span class="text-success">In Stock</span> </div>
                  </div></td>
                <td class="col-sm-1 col-md-1" style="text-align: center"><input class="form-control price_table" value="'.$soluong.'" type="email">
                </td>
                <td class="col-sm-1 col-md-1 text-center"><p class="price_table">'.$gia.'</p></td>
                <td class="col-sm-1 col-md-1 text-center"><p class="price_table">'.number_format( $tongtien , 0 , "," , ".").'</p></td>
                <td class="col-sm-1 col-md-1"><a href="/delcart/'.$id_sp.'"><button type="button" class="bt_main"><i class="fa fa-trash"></i></button></a></td>
              </tr>
              ';
                }
            ?>
             <?php
             
             ?>
            </tbody>
          </table>

    </div>
    
  </div>
</div>
@endsection
