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
            <strong><h3 class="text-center">{{$edit_product->product_name}}</h3></strong>
        </div>
        <form action="{{route('product.update',['id'=>$edit_product->product_id])}}" method="POST" enctype="multipart/form-data" autocomplete="off">
            @csrf
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Product name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="product_name" value="{{$edit_product->product_name}}">
                        @if($errors->has('product_name'))
                            <p style="color: red">{{$errors->first('product_name')}}</p>
                        @endif  
                    </div>
                      <div class="form-group">
                          <label for="exampleFormControlInput1">Producer</label>
                          <input type="text" class="form-control" id="exampleFormControlInput1" name="producer" value={{$edit_product->producer}}>
                          @if($errors->has('producer'))
                            <p style="color: red">{{$errors->first('producer')}}</p>
                        @endif  
                     </div>
                     <div class="form-group">
                     <label for="exampleFormControlInput1">Category</label>
                     <select class="form-control" name="category">
                        @foreach ($list_category as $ls_category)
                                <option 
                                @if ($edit_product->category_id==$ls_category->category_id)
                                {{"selected"}}
                                @endif
                                value="{{$ls_category->category_id}}">{{$ls_category->category_name}}</option>
                        @endforeach
                      </select>
                      @if($errors->has('category'))
                            <p style="color: red">{{$errors->first('category')}}</p>
                        @endif  
                    </div>
                     <div class="form-group">
                        <label for="exampleFormControlInput1">Unit Price</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" name="unit_price" onkeyup="this.value = FormatNumber(this.value);" value={{$edit_product->unit_price}}>
                        @if($errors->has('unit_price'))
                            <p style="color: red">{{$errors->first('unit_price')}}</p>
                        @endif  
                   </div>
                   <div class="form-group">
                    <label for="exampleFormControlInput1">Promo Price</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" name="promo_price" onkeyup="this.value = FormatNumber(this.value);" value={{$edit_product->promo_price}}>
                    <p style="color: red" class="price">Promotion price must be smaller than original price</p>
                    @if($errors->has('promo_price'))
                            <p style="color: red">{{$errors->first('promo_price')}}</p>
                        @endif  
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Amount</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" name="amount" value={{$edit_product->amount}}>
                        @if($errors->has('amount'))
                            <p style="color: red">{{$errors->first('amount')}}</p>
                        @endif  
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Description</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="descripe" value={{$edit_product->describe}}>
                       </div>
                       <div class="form-group">
                        <label for="exampleFormControlInput1">Image</label>
                        <input id="ImageMedias" multiple="multiple" name="image" type="file"
                        accept=".jfif,.jpg,.jpeg,.png,.gif" class="custom-file-input">  
                        @if($errors->has('image'))
                            <p style="color: red">{{$errors->first('image')}}</p>
                        @endif                                  
                        <div id="divImageMediaPreview"></div>
                   </div>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">Edit Product</button>
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