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
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="row">
                        <div class="col-md-6 panel-heading title">Product List</div>
                        <div class="col-md-6 panel-heading text-right">
                            <a href="{{route('product.create')}}" type="submit" class="btn btn-primary">Add Product</a>
                        </div>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Product Name</th>
                                        <th>Producer</th>
                                        <th>Category name</th>
                                        <th>Unit price</th>
                                        <th>Promo price</th>
                                        <th>Amount</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $stt=1 ?>
                                    @foreach ($list_product as $ls_product)
                                    <tr class="odd gradeX">
                                        <td>{{$stt++}}</td>
                                        <td>{{$ls_product->product_name}}</td>
                                        <td>{{$ls_product->producer}}</td>
                                        <td>{{$ls_product->category_name}}</td>
                                        <td>{{$ls_product->unit_price}}</td>
                                        <td>{{$ls_product->promo_price}}</td>
                                        <td>{{$ls_product->amount}}</td>
                                        <td>{{$ls_product->describe}}</td>
                                        <td>
                                            <img src="{{ asset('images/products/'.$ls_product->image_name)}}" style="width:50px;height:30px" alt="">
                                        </td>
                                        <td>
                                            <a href="{{route('product.edit',['id'=>$ls_product->product_id])}}"><i class="fa fa-pencil-square-o"></i></a>
                                            <a  class="deleteProduct"><i class="fa fa-trash-o"></i></a>
                                            @include('admin.home-admin.modal.modal_delete_product_confirm')
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
    $(document).on('click','.deleteProduct',function(){
        $(this).next().modal('show'); 
    });
    </script>
@endsection