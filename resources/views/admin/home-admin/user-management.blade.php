@extends('admin.home-admin.layouts.layout');
@section('css-admin')
<link href="{{ asset('css/user-management/dataTables.bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('css/user-management/dataTables.responsive.css') }}" rel="stylesheet">
<link href="{{ asset('css/category.css') }}" rel="stylesheet">
@endsection
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12" style="padding-top: 20px">
                <div class="panel panel-default">
                    <div class="panel-heading title">
                       Danh sách người dùng
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Tên</th>
                                        <th>Email</th>
                                        <th>Địa chỉ</th>
                                        <th>Số điện thoại</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_user as $ls_user)
                                    <tr class="odd gradeX">
                                        <td>{{$ls_user->name}}</td>
                                        <td>{{$ls_user->email}}</td>
                                        <td>{{$ls_user->address}}</td>
                                        <td>{{$ls_user->phone}}</td>
                                        <td class="center">
                                            <i class="fa fa-trash-o deleteUser" data-userid="{{$ls_user->id}}"></i>
                                            {{-- <button class="btn btn-danger deleteUser" data-userid="{{$ls_user->id}}">Delete</button> --}}
                                        </td>
                                    </tr>
                                    @include('admin.home-admin.modal.modal_delete_user_confirm')
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('javascript-admin')
<script src="{{ asset('js/user-management/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/user-management/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('js/startmin.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>
<script>
    $(document).on('click','.deleteUser',function(){
        var userID=$(this).attr('data-userid');
        $('#user_id').val(userID); 
        $('#applicantDeleteModal').modal('show'); 
    });
    </script>
@endsection