@extends('admin.home-admin.layouts.layout');
@section('css-admin')
<link href="{{ asset('css/user-management/dataTables.bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('css/user-management/dataTables.responsive.css') }}" rel="stylesheet">
@endsection
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="row">
                        <div class="col-md-6 panel-heading">Size List</div>
                        <div class="col-md-6 panel-heading float-right">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                                Add size
                              </button>
                              @include('admin.home-admin.modal.modal_add_size')
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
                                        <th>Create_at</th>
                                        <th>Update_at</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $stt=1 ?>
                                    @foreach ($list_size as $ls_size)
                                    <tr class="odd gradeX">
                                        <td>{{$stt++}}</td>
                                        <td>{{$ls_size->size_name}}</td>
                                        <td>{{$ls_size->created_at}}</td>
                                        <td>{{$ls_size->updated_at}}</td>
                                        <td><i class="fa fa-pencil-square-o editSize"></i>
                                            @include('admin.home-admin.modal.modal_edit_size')
                                            <i class="fa fa-trash-o deleteSize"></i>
                                            @include('admin.home-admin.modal.modal_delete_size_confirm')

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
    $(document).on('click','.deleteSize',function(){
        $(this).next().modal('show'); 
    });
    $(document).on('click','.editSize',function(){
        $(this).next().modal('show'); 
    });
    </script>
@endsection