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
                    
                        <div class="col-md-6 title">Post List</div>
                        <div class="col-md-6 text-right">
                            <button type="button" class="btn btn-primary mr-2" data-toggle="modal" data-target="#staticBackdrop">
                                Add Post
                              </button>                       
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
                                        <th>Name</th>
                                        <th>Detail</th>
                                        <th>Image</th>
                                        <th>Create_at</th>
                                        <th>Update_at</th>
                                        <th>Action</th>
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
                                        <i class="fa fa-pencil-square-o editCategory"></i>
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