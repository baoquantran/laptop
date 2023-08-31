@extends('admin/layoutadmin')
@section('noidungchinh')
<div class="product-status mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Products List</h4>
                            <div class="add-product">
                                <a href="{{route('user.create')}}">Thêm user</a>
                            </div>
                            
                            <table>
                            @if(Session::exists('thongbao'))
                            <h4 class="alert alert-info text-center">{{ Session::get('thongbao') }}</h4>
                            @endif
                                <tr>
                                    <th>ID</th>
                                    <th>Họ và tên</th>
                                    <th>Email</th>
                                   
                                    <th>Địa chỉ</th>
                                    <th>Điện thoại</th>
                                    <th>Vai trò</th>
                                    <th>Ngày xác thực</th>
                                    <th>Ngày tạo</th>
                                    <th>Ngày sửa</th>
                                    <th>Cài đặt</th>
                                </tr>
                                @foreach($user as $u)
                                <tr>
                                    <td>{{$u->id_user}}</td>
                                    <td>{{$u->ho}} {{$u->ten}}</td>
                                    <td>{{$u->email}}</td>
                                    <td>{{$u->diachi}}</td>
                                    <td>{{$u->dienthoai}}</td>
                                    <td>{{($u->vaitro==0)? "Thành viên":"Admin"}}</td>
                                    <td>{{$u->email_verified_at}}</td>
                                    <td>{{$u->created_at}}</td>
                                    <td>{{$u->updated_at}}</td>
                                    <td>
                                    <form class="d-inline" action="{{ route('user.destroy', $u->id_user) }}" method="POST">
                                    @csrf  @method('DELETE')
                                    <a class="btn btn-primary btn-sm " href="{{route('user.edit',$u->id_user)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
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
                               
								</ul>
                            </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
</div>
@endsection