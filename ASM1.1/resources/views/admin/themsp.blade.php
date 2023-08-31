@extends('admin/layoutadmin')
@section('noidungchinh')

<form  method="post" action="{{route('sanpham.store')}}" > @csrf
<div class="single-product-tab-area mg-b-30">
            <!-- Single pro tab review Start-->
            <div class="single-pro-review-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Product Edit</a></li>
                                </ul>
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        <div class="row">
                                        <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                                    <img src="https://laptop3mien.vn/wp-content/uploads/2020/01/DELL-PRECISION-7520-laptop3mien.vn_.jpg" alt="">
                                            </div>
                                            <div class="col-lg-">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                                        <input name="ten_sp" type="text" class="form-control" placeholder="Tên sản phẩm">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                                                        <input name="ngay" type="date" class="form-control" placeholder="">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                        <input name="gia" type="text" class="form-control" placeholder="Giá">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                        <input name="gia_km" type="text" class="form-control" placeholder="Giá khuyến mãi">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-new-file" aria-hidden="true"></i></span>
                                                        <input name="hinh" type="file" class="form-control" placeholder="Ảnh">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt ">
                                                    <select name="select" class="input-group form-control">
														<option name="anhien" value="0">Hiện</option>
                                                        <option name="anhien" value="1">Ẩn</option>
														</select>
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt ">
                                                    <select name="id_loai" class="input-group form-control">
                                                        <option value="-1">Chọn loại sản phẩm</option>
															@foreach($listloai as $l)
                                                            <option  value="{{$l->id_loai}}">{{$l->ten_loai}}</option>
                                                            @endforeach
														</select>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center custom-pro-edt-ds">
                                                    <button type="sunmit" class="btn btn-ctl-bt waves-effect waves-light m-r-10">Save
														</button>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>
</form>
@endsection
