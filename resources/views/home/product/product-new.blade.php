<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="title-section">
                <div class="left-part">
                    <span>Sản phẩm</span>
                    <h1>Sản phẩm gần đây
                    </h1>
                </div>
                <div class="right-part">
                    <a class=" button-one" href="# ">Xem tất cả</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="owl4 owl-carousel owl-theme">
            @foreach ($product_new as $p_new)
            <div class="item">
                <div class="product-grid4">
                    <div class="product-image4">
                        <a href="#">
                            <img class="pic-1" src="{{asset('images/products/'.$p_new->image_name)}}">
                            <img class="pic-2" src="{{asset('images/products/'.$p_new->image_name)}}">
                        </a>
                        <ul class="social">
                            <li><a href="{{route('product.show',['id'=>$p_new->product_id])}}" data-tip="Chi tiết sản phẩm"><i class="fa fa-eye"></i></a></li>
                            <li><a data-tip="Thêm vào giỏ hàng" data-product_id="{{$p_new->product_id}}" class="cart"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                        <span class="product-new-label">New</span>
                        <span class="product-discount-label">-10%</span>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">{{$p_new->product_name}}</a></h3>
                        <div class="price">
                            {{number_format($p_new->promo_price)}}
                            <span>{{number_format($p_new->unit_price)}}</span>
                        </div>
                        <a class="add-to-cart cart" data-product_id="{{$p_new->product_id}}">Thêm vào giỏ hàng</a>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>

    </div>

</div>