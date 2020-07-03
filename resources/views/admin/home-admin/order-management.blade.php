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
                    <div class="container-fluid">
                    <div class="row panel-heading">
                      
                        <div class="col-md-6 title">Danh sách đơn hàng</div>
                    </div>
                    </div>
                    <!-- /.panel-heading -->
                    
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên người dùng</th>
                                        <th>Địa chỉ</th>
                                        <th>Số điện thoại</th>
                                        <th> Tổng tiền</th>
                                        <th>Tình trạng đơn hàng </th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $stt=1 ?>
                                    @foreach ($list_order as $ls_order)
                                    <tr class="odd gradeX text-center">
                                        <td>{{$stt++}}</td>
                                        <td>{{$ls_order->name}}</td>
                                        <td>{{$ls_order->address}}</td>
                                        <td>{{$ls_order->phone}}</td>
                                        <td>{{number_format($ls_order->total_money)}}<sup>đ</sup></td>
                                        <td>
                                            <select class="order" data-idOrder="{{$ls_order->order_id}}">
                                                @foreach($list_status as $ls_status)
                                                @if( $ls_order->status_order_id == $ls_status->status_order_id )
                                                    <option value="{{ $ls_order->status_order_id }}"
                                                            selected="true">{{ $ls_order->status_order_name }}</option>
                                                @else
                                                    <option
                                                        value="{{ $ls_status->status_order_id }}">{{ $ls_status->status_order_name }}</option>
                                                @endif
                                            @endforeach
                                            </select>
                                        </td>
                                        <td><i class="fa fa fa-eye orderDetail"></i>
                                            @include('admin.home-admin.modal.modal_order_detail')
                                        </td>
                                    </tr>
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
<script src="{{ asset('js/order.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>
<script>
    $(document).on('click','.orderDetail',function(){
        $(this).next().modal('show'); 
    });
    $(document).on('click','.editColor',function(){
        $(this).next().modal('show'); 
    });
    </script>
@endsection