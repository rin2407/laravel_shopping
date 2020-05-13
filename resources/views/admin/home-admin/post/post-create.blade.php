@extends('admin.home-admin.layouts.layout');
@section('css-admin')
<link href="{{ asset('css/user-management/dataTables.bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('css/user-management/dataTables.responsive.css') }}" rel="stylesheet">
@endsection
@section('content')
<div id="page-wrapper">
    <div class="container-fluid mt-3">
        <div class="title">
            <strong><h3 class="text-center">Thêm tin tức</h3></strong>
        </div>
        <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data" autocomplete="off">
            @csrf
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    
                    <div class="form-group row">
                        <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Tên tin tức</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="post_name" value="{{old('post_name')}}">
                        @if($errors->has('post_name'))
                            <p style="color: red">{{$errors->first('post_name')}}</p>
                        @endif  
                        </div>
                    </div>
                        <div class="form-group row">
                            <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Mô tả</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="post_detail" value="{{old('post_detail')}}">
                            @if($errors->has('post_detail'))
                                <p style="color: red">{{$errors->first('post_detail')}}</p>
                            @endif  
                            </div>
                        </div>
                       <div class="form-group row">
                        <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Hình ảnh</label>
                       <div class="col-sm-10">
                        <input id="ImageMedias" multiple="multiple" name="image" type="file"
                        accept=".jfif,.jpg,.jpeg,.png,.gif" class="custom-file-input"  value="">  
                        @if($errors->has('image'))
                            <p style="color: red">{{$errors->first('image')}}</p>
                        @endif
                       </div>     
                    </div>                             
                        <div id="divImageMediaPreview"></div>
                   </div>
                </div>
            </div>
          <div class="text-center">
           <button type="submit" class="btn btn-success">Thêm tin tức</button>
          <a href="{{route('post.index')}}" type="submit" class="btn btn-primary">Trở lại</a>
          </div>
        <form>
    </div>
</div>
@endsection
@section('javascript-admin')
<script src="{{ asset('js/user-management/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/user-management/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('js/startmin.js') }}"></script>
<script src="{{ asset('js/product.js') }}"></script>

@endsection