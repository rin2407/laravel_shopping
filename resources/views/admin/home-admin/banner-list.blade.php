@extends('admin.home-admin.layouts.layout');
@section('css-admin')
<link href="{{ asset('css/user-management/dataTables.bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('css/user-management/dataTables.responsive.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/toastr.min.css')}}">
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
                      
                        <div class="col-md-6 title">Danh sách banner</div>
                        <div class="col-md-6  text-right">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                               Thêm banner
                              </button>
                              @include('admin.home-admin.modal.modal_add_banner')
                        </div>
                    </div>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Hình ảnh</th>
                                        <th>Tạo lúc</th>
                                        <th>Ẩn/Hiện</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $stt=1 ?>
                                    @foreach ($list_banner as $ls_banner)
                                    <tr class="odd gradeX text-center">
                                        <td>{{$stt++}}</td>
                                        <td><img src="{{asset('images/banners/'.$ls_banner->image_banner)}}" alt="" style="width:300px;height:100px"></td>
                                        <td>{{$ls_banner->created_at}}</td>
                                        <td>
                                            <select class="form-control banner" id="exampleFormControlSelect1" data-idBanner="{{$ls_banner->id}}">
                                                @if ($ls_banner->status ==1)
                                                <option value="1" selected>Hiện Banner</option>
                                                <option value="0">Ẩn Banner</option>
                                                @else
                                                <option value="1">Hiện Banner</option>
                                                <option value="0" selected>Ẩn Banner</option>
                                                @endif
                                                
                                              </select>
                                        </td>
                                        <td>
                                            {{-- @include('admin.home-admin.modal.modal_edit_banner') --}}
                                            <i class="fa fa-trash-o deleteBanner"></i>
                                            @include('admin.home-admin.modal.modal_delete_banner_confirm')

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
<script src="{{ asset('js/banner.js') }}"></script>
<script src="{{asset('bootstrap/js/toastr.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>
<script>
    $(document).on('click','.deleteBanner',function(){
        $(this).next().modal('show'); 
    });
    </script>
<script src="{{ asset('js/product.js') }}"></script>
@endsection