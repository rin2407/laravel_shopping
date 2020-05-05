@extends('admin.home-admin.layouts.layout');
@section('css-admin')
<link href="{{ asset('css/user-management/dataTables.bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('css/user-management/dataTables.responsive.css') }}" rel="stylesheet">
<link href="{{ asset('css/product.css') }}" rel="stylesheet">
@endsection
@section('content')
<div id="page-wrapper">
    <div class="container-fluid mt-3">
        <div class="title">
            <strong><h3 class="text-center">Add product</h3></strong>
        </div>
        <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data" autocomplete="off">
            @csrf
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    
                    <div class="form-group row">
                        <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Product name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="product_name" value="{{old('product_name')}}">
                        @if($errors->has('product_name'))
                            <p style="color: red">{{$errors->first('product_name')}}</p>
                        @endif  
                        </div>
                        
                    </div>
                      <div class="form-group row">
                          <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Producer</label>
                          <div class="col-sm-10">
                          <input type="text" class="form-control" id="exampleFormControlInput1" name="producer" value={{old('producer')}}>
                          @if($errors->has('producer'))
                            <p style="color: red">{{$errors->first('producer')}}</p>
                        @endif 
                      </div> 
                     </div>
                     <div class="form-group row">
                     <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Category</label>
                     <div class="col-sm-10">
                     <select class="form-control" name="category">
                        <option value="">-- Choose category</option>
                        @foreach ($list_category as $ls_category)
                            <option value="{{$ls_category->category_id}}">{{$ls_category->category_name}}</option>
                        @endforeach
                      </select>
                      @if($errors->has('category'))
                            <p style="color: red">{{$errors->first('category')}}</p>
                        @endif  
                     </div>
                    </div>
                     <div class="form-group row">
                        <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Unit Price</label>
                        <div class="col-sm-10">
                        <input type="number" class="form-control" id="exampleFormControlInput1" name="unit_price" onkeyup="this.value = FormatNumber(this.value);" value={{old('unit_price')}}>
                        @if($errors->has('unit_price'))
                            <p style="color: red">{{$errors->first('unit_price')}}</p>
                        @endif  
                    </div>
                   </div>
                   <div class="form-group row">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Promo Price</label>
                    <div class="col-sm-10">
                    <input type="number" class="form-control" id="exampleFormControlInput1" name="promo_price" onkeyup="this.value = FormatNumber(this.value);">
                    <p style="color: red" class="price">Promotion price must be smaller than original price</p>
                    @if($errors->has('promo_price'))
                            <p style="color: red">{{$errors->first('promo_price')}}</p>
                        @endif  
                    </div>
                </div>
                    <div class="form-group row">
                        <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Amount</label>
                        <div class="col-sm-10">
                      
                        <input type="number" class="form-control" id="exampleFormControlInput1" name="amount" value={{old('amount')}}>
                        @if($errors->has('amount'))
                            <p style="color: red">{{$errors->first('amount')}}</p>
                        @endif  
                        </div>
                              
                    </div>
                        <div class="form-group row">
                            <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Description</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="descripe" value={{old('descripe')}}>
                       </div>
                    </div>
                       <div class="form-group row">
                        <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Image</label>
                       <div class="col-sm-10">
                        <input id="ImageMedias" multiple="multiple" name="image" type="file"
                        accept=".jfif,.jpg,.jpeg,.png,.gif" class="custom-file-input"  value="">  
                        @if($errors->has('image'))
                            <p style="color: red">{{$errors->first('image')}}</p>
                        @endif     
                    </div>                             
                        <div id="divImageMediaPreview"></div>
                   </div>
                </div>
            </div>
          <div class="text-center">
           <button type="submit" class="btn btn-success">Add Product</button>
          <a href="{{route('product.index')}}" type="submit" class="btn btn-primary">Return</a>
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