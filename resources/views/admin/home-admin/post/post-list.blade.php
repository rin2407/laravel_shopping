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
                <div class="panel panel-default" >
                    <div class="container-fluid">
                    <div class="row panel-heading">
                    
                        <div class="col-md-6 title"> Danh sách tin tức</div>
                        <div class="col-md-6 text-right">
                            <a  href="{{ route('post.create')}}"type="button" class="btn btn-primary mr-2">
                                Thêm tin tức
                            </a>                       
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
                                        <th>Tên</th>
                                        <th>Chi tiết</th>
                                        <th>Hình ảnh</th>
                                        <th>Tạo lúc</th>
                                        <th>Cập nhật lúc</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $stt=1 ?>
                                    @foreach ($list_post as $ls_post)
                                    <tr class="odd gradeX text-center">
                                        <td>{{$stt++}}</td>
                                        <td>{{$ls_post->post_title}}</td>
                                        <td>{{$ls_post->post_detail}}</td>
                                        <td><img src="{{asset('images/posts/'.$ls_post->image_post)}}" alt="" style="width:50px;height:50px"></td>
                                        <td>{{$ls_post->created_at}}</td>
                                        <td>{{$ls_post->updated_at}}</td>
                                        <td>
                                        <a href="{{route('post.edit',['id'=>$ls_post->post_id])}}"><i class="fa fa-pencil-square-o editCategory"></i></a>
                                        <i class="fa fa-trash-o deletePost"></i>
                                            @include('admin.home-admin.modal.modal_delete_post_confirm')
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
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>
<script>
    $(document).on('click','.deletePost',function(){
        $(this).next().modal('show'); 
    });
    </script>
@endsection