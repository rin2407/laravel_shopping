@extends('home.layouts.app')
@section('content')
<section class="page-banner-section my-3">
    <div class="container">

        <ul class="page-depth">
            <li><a href="{{route('home')}}">{{__('home')}}</a></li>
            <li class="bt"><a href="{{route('product.all')}}">{{__('product all')}}</a></li>
        </ul>
    </div>
</section>
<section class="category-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 order-2 order-lg-1">
                <div class="filter-widget">
                    <h2 class="fw-title">{{__('category')}}</h2>
                    <ul class="category-menu">
                        @foreach ($category_all as $ctgr_all)
                        <li class="category" category-id={{$ctgr_all->category_id}}><a class="shop-cls__0000" style="cursor: pointer">{{$ctgr_all->category_name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="filter-widget">
                    <h2 class="fw-title">Size</h2>
                    <div class="fw-size-choose">
                        @foreach ($size_all as $s_all)
                        <div class="sc-item">
                            <input type="radio" name="sc" id="xs-size">
                            <label for="xs-size">{{$s_all->size_name}}</label>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="filter-widget">
                    <h2 class="fw-title">Brand</h2>
                    <ul class="category-menu">
                        <li><a href="#">Abercrombie &amp; Fitch <span>(2)</span></a></li>
                        <li><a href="#">Asos<span>(56)</span></a></li>
                        <li><a href="#">Bershka<span>(36)</span></a></li>
                        <li><a href="#">Missguided<span>(27)</span></a></li>
                        <li><a href="#">Zara<span>(19)</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
                <div class="select-start">
                    <div class="row">
                        @foreach ($product_all as $p_all)
                        <div class="col-lg-4 col-sm-6 shop-mb__10x">
                            <div class="product-grid4">
                                <div class="product-image4">
                                    <a href="{{route('product.show',['name'=>$p_all->product_name_slug])}}">
                                        <img class="pic-1" src="{{asset('images/products/'.$p_all->image_name)}}">
                                        <img class="pic-2" src="{{asset('images/products/'.$p_all->image_name)}}">
                                    </a>
                                    <ul class="social">
                                        <li><a href="{{route('product.show',['name'=>$p_all->product_name_slug])}}" data-tip="{{ __('product detail')}}"><i class="fa fa-eye"></i></a></li>
                                        <li><a data-tip="{{__('add cart')}}" data-product_id="{{$p_all->product_id}}" data-user="{{ Auth::check() ? '1' : '0'}}" class="cart"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                    <span class="product-discount-label">-{{(round(100*($p_all->unit_price-$p_all->promo_price)/$p_all->unit_price)) }}%</span>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="{{route('product.show',['name'=>$p_all->product_name_slug])}}">{{$p_all->product_name}}</a></h3>
                                    <div class="price">
                                        {{number_format($p_all->promo_price)}}<sup>đ</sup>
                                        <span>{{number_format($p_all->unit_price)}}<sup>đ</sup></span>
                                    </div>
                                    <a class="add-to-cart cart" data-product_id="{{$p_all->product_id}}" data-user="{{ Auth::check() ? '1' : '0'}}">{{__('add cart')}}</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="select">
                        <div class="select-result row"></div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('javascript')
<script src="{{ asset('js/category.js') }}"></script>
@endsection