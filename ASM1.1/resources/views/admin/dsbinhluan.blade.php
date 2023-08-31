@extends('admin/layoutadmin')
@section('noidungchinh')
<div class="product-status mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Products List</h4>
                            <div class="add-product">
                                <a href="{{route('loai.create')}}">Thêm loại</a>
                            </div>
                            <table class="">
                            @if(Session::exists('thongbao'))
                            <h4 class="alert alert-info text-center"> <b class="text-danger">{{ Session::get('thongbao') }}</b></h4>
                            @endif
                                <tr>
                                    <th>ID sản phẩm</th>
                                    <th>ID người bình luận</th>
                                    <th>Thời gian</th>
                                    <th>Tên người bình luận</th>
                                    <th>Nội dung</th>
                                    <th>Cài đặt</th>
                                </tr>
                                <tr>
                            @foreach($cmt as $c)
                                <tr class="text-center">
                                    <td>{{$c->id_sp}}</td>
                                    <td>{{$c->id_user}}</td>
                                    <td>{{$c->thoidiem}}</td>
                                    <td>{{$c->ho}} {{$c->ten}}</td>
                                    <td>{{$c->noidung}}</td>
                                    <td>
                                    <form class="d-inline" action="{{ route('binhluan.destroy', $c->id_bl) }}" method="POST">
                                    @csrf  @method('DELETE')
                                    
                                    <!-- nutxoa -->
                                    <button data-toggle="tooltip" title="Xóa" class="pd-setting-ed" type='submit' onclick="return confirm('Xóa hả')" class="btn btn-danger btn-sm" >
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                    </button>
                                        </form>
                                    </td>
                                </tr>
                                
                            @endforeach
                            
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection