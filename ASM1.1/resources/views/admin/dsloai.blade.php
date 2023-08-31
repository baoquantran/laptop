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
                                    <th>Thứ tự</th>
                                    <th>Tên</th>
                                    <th>Ẩn hiện</th>
                                    <th>Cài đặt</th>
                                </tr>
                                <tr>
                            @foreach($dsloai as $loai)
                                <tr class="text-center">
                                    <td>{{$loai->thutu}}</td>
                                    <td>{{$loai->ten_loai}}</td>
                                    <td>{{($loai->anhien==0)? "Đang ẩn":"Đang hiện"}}</td>
                                    <td>
                                    <form class="d-inline" action="{{ route('loai.destroy', $loai->id_loai) }}" method="POST">
                                    @csrf  @method('DELETE')
                                    <a class="btn btn-primary btn-sm " href="{{route('loai.edit',$loai->id_loai)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
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