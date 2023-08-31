@extends('admin/layoutadmin')
@section('noidungchinh')
<div class="product-status mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Products List</h4>
                            <div class="add-product">
                                <a href="{{route('user.create')}}">Thêm sản phầm</a>
                            </div>
                            
                            <table>
                            @if(Session::exists('thongbao'))
                            <h4 class="alert alert-info text-center">{{ Session::get('thongbao') }}</h4>
                            @endif
                                <tr>
                                    <th>ID</th>
                                    <th>Ảnh</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Giá khuyến mãi</th>
                                    <th>Loại</th>
                                    <th>Ẩn, Hiện</th>
                                    <th>Cài đặt</th>
                                </tr>
                                @foreach($sanpham as $sp)
                                <tr>
                                    <td>{{$sp->id_sp}}</td>
                                    <td><img src='{{$sp->hinh}}' alt="" /></td>
                                    <td>{{$sp->ten_sp}}</td>
                                    <td>{{number_format($sp->gia, 0,'',',')}}</td>
                                    <td>{{number_format($sp->gia_km, 0,'',',')}}</td>
                                    <td>{{$sp->ten_loai}}</td>
                                    <td>{{($sp->anhien==0)? "Đang ẩn":"Đang hiện"}}</td>
                                    <td>
                                    <form class="d-inline" action="{{ route('sanpham.destroy', $sp->id_sp) }}" method="POST">
                                    @csrf  @method('DELETE')
                                    <a class="btn btn-primary btn-sm " href="{{route('sanpham.edit',$sp->id_sp)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                    <!-- nutxoa -->
                                    <button data-toggle="tooltip" title="Xóa" class="pd-setting-ed" type='submit' onclick="return confirm('Xóa hả')" class="btn btn-danger btn-sm" >
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                    </button>
                                    </form>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                            <center>
                            <div class="custom-pagination">
								<ul class="pagination d-flex justify-content-center">
                                {{ $sanpham->onEachSide(3)->links() }}
								</ul>
                            </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection