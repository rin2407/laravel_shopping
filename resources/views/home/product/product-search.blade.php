@extends('home.layouts.app')
@section('content')
<div class="container">
<div class="row">
    @foreach ($product_search as $p_search)
    <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
        <div class="product-grid4">
            <div class="product-image4">
                <a href="{{route('product.show',['id'=>$p_search->product_id])}}">
                    <img class="pic-1" src="{{asset('images/products/'.$p_search->image_name)}}">
                    <img class="pic-2" src="{{asset('images/products/'.$p_search->image_name)}}">
                </a>
                <ul class="social">
                        <li><a href="{{route('product.show',['id'=>$p_search->product_id])}}" data-tip="Chi tiết sản phẩm"><i class="fa fa-eye"></i></a></li>
                        <li><a data-tip="Thêm vào giỏ hàng" data-product_id="{{$p_search->product_id}}" data-user="{{ Auth::check() ? '1' : '0'}}" class="cart"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
                <span class="product-new-label">New</span>
                <span class="product-discount-label">-{{(round(100*($p_search->unit_price-$p_search->promo_price)/$p_search->unit_price)) }}%</span>
            </div>
            <div class="product-content">
                <h3 class="title"><a href="{{route('product.show',['id'=>$p_search->product_id])}}">{{$p_search->product_name}}</a></h3>
                <div class="price">
                    {{number_format($p_search->promo_price)}}<sup>đ</sup>
                    <span>{{number_format($p_search->unit_price)}}<sup>đ</sup></span>
                </div>
                <a class="add-to-cart cart" data-product_id="{{$p_search->product_id}}" data-user="{{ Auth::check() ? '1' : '0'}}">Thêm vào giỏ hàng</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
</div>
@endsection