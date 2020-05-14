<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="title-section">
                <div class="left-part">
                    <span>Sản phẩm</span>
                    <h1>Sản phẩm bán chạy
                    </h1>
                </div>
                <div class="right-part">
                    <a class=" button-one" href="{{route('product.all')}}">Xem tất cả</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach ($product_sell as $p_sell)
        <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
            <div class="product-grid4">
                <div class="product-image4">
                    <a href="{{route('product.show',['id'=>$p_sell->product_id])}}">
                        <img class="pic-1" src="{{asset('images/products/'.$p_sell->image_name)}}">
                        <img class="pic-2" src="{{asset('images/products/'.$p_sell->image_name)}}">
                    </a>
                    <ul class="social">
                            <li><a href="{{route('product.show',['id'=>$p_sell->product_id])}}" data-tip="Chi tiết sản phẩm"><i class="fa fa-eye"></i></a></li>
                            <li><a data-tip="Thêm vào giỏ hàng" data-product_id="{{$p_sell->product_id}}" data-user="{{ Auth::check() ? '1' : '0'}}" class="cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">New</span>
                    <span class="product-discount-label">-{{(round(100*($p_sell->unit_price-$p_sell->promo_price)/$p_sell->unit_price)) }}%</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="{{route('product.show',['id'=>$p_sell->product_id])}}">{{$p_sell->product_name}}</a></h3>
                    <div class="price">
                        {{number_format($p_sell->promo_price)}}<sup>đ</sup>
                        <span>{{number_format($p_sell->unit_price)}}<sup>đ</sup></span>
                    </div>
                    <a class="add-to-cart cart" data-product_id="{{$p_sell->product_id}}" data-user="{{ Auth::check() ? '1' : '0'}}">Thêm vào giỏ hàng</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>