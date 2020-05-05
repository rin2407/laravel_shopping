@extends('home.layouts.app')
@section('content')
<section class="page-banner-section my-4">
    <div class="container">
        <ul class="page-depth">
            <li><a href="index.html">Trang chủ</a></li>
            <li class="bt"><a href="course.html">Chi tiết sản phẩm</a></li>

        </ul>
    </div>
</section>
<section class="product-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="owl5 owl-carousel owl-theme">
                    <div class="item">
                        <img src="{{asset('images/products/'.$p_detail->image_name)}}" alt="" class="photo"></div>
                    <div class="item">
                        <img src="{{asset('images/products/'.$p_detail->image_name)}}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{asset('images/products/'.$p_detail->image_name)}}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{asset('images/products/'.$p_detail->image_name)}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 product-details">
                <h2 class="p-title">{{$p_detail->product_name}}</h2>
                <h3 class="p-price">{{$p_detail->promo_price}}</h3>
                <h4 class="p-stock">Available: <span>In Stock</span></h4>
                <div class="p-rating">
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o fa-fade"></i>
                </div>
                <div class="p-review">
                    <a href="">3 reviews</a>|<a href="">Add your review</a>
                </div>
                <div class="fw-size-choose">
                    <p>Size</p>
                    <div class="sc-item">
                        <input type="radio" name="sc" id="xs-size">
                        <label for="xs-size">32</label>
                    </div>
                    <div class="sc-item">
                        <input type="radio" name="sc" id="s-size">
                        <label for="s-size">34</label>
                    </div>
                    <div class="sc-item">
                        <input type="radio" name="sc" id="m-size" checked="">
                        <label for="m-size">36</label>
                    </div>
                    <div class="sc-item">
                        <input type="radio" name="sc" id="l-size">
                        <label for="l-size">38</label>
                    </div>
                    <div class="sc-item disable">
                        <input type="radio" name="sc" id="xl-size" disabled="">
                        <label for="xl-size">40</label>
                    </div>
                    <div class="sc-item">
                        <input type="radio" name="sc" id="xxl-size">
                        <label for="xxl-size">42</label>
                    </div>
                </div>
                <div class="quantity">
                    <p>Quantity</p>
                    <div class="pro-qty">
                        <span class="dec qtybtn">-</span>
                        <input type="text" value="1" class="count">
                        <span class="inc qtybtn">+</span></div>
                </div>
                <a href="#" class="site-btn">Thêm vào giỏ hàng</a>

            </div>
        </div>
        <hr>
        <div class="row justify-content-center">
            <div class="col-8 ">
                <nav>
                    <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Mô tả sản phẩm</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Đánh giá khách hàng</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="name">Tên sản phẩm</td>
                                    <td>{{$p_detail->product_name}}</td>
                                </tr>
                                <tr>
                                    <td class="name">Kích thước</td>
                                    <td>Thornton</td>
                                </tr>
                                <tr>

                                    <td class="name">Màu</td>
                                    <td>Thornton</td>

                                </tr>
                                <tr>

                                    <td class="name">Mô tả</td>
                                    <td>{{$p_detail->describe}}</td>

                                </tr>
                                <tr>

                                    <td class="name">Lượt xem</td>
                                    <td>{{$p_detail->view_count}}</td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="reviews">
                            <h5>Đánh giá của bạn</h5>
                            <form>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Địa chỉ email</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Đánh giá của bạn</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <a href="" class="btn btn-primary">Bình luận</a>
                            </form>
                        </div>
                        <div class="reviews">
                            <div class="row blockquote review-item">
                                <div class="col-md-3 text-center">
                                    <img class="rounded-circle reviewer" src="http://standaloneinstaller.com/upload/avatar.png">
                                    <div class="caption">
                                        <small>by <a href="#joe">Joe</a></small>
                                    </div>

                                </div>
                                <div class="col-md-9">
                                    <h4>My awesome review</h4>
                                    <div class="ratebox text-center" data-id="0" data-rating="5"></div>
                                    <p class="review-text">My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. </p>

                                    <small class="review-date">March 26, 2017</small>
                                </div>
                            </div>
                        </div>
                        <div class="reviews">
                            <div class="row blockquote review-item">
                                <div class="col-md-3 text-center">
                                    <img class="rounded-circle reviewer" src="http://standaloneinstaller.com/upload/avatar.png">
                                    <div class="caption">
                                        <small>by <a href="#joe">Joe</a></small>
                                    </div>

                                </div>
                                <div class="col-md-9">
                                    <h4>My awesome review</h4>
                                    <div class="ratebox text-center" data-id="0" data-rating="5"></div>
                                    <p class="review-text">My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. </p>

                                    <small class="review-date">March 26, 2017</small>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="education">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-section">
                    <div class="left-part">
                        <span>Sản phẩm</span>
                        <h1>Sản phẩm liên quan
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
                @foreach ($p_relate as $relate)
                <div class="item">
                    <div class="product-grid4">
                        <div class="product-image4">
                            <a href="#">
                                <img class="pic-1" src="{{asset('images/products/'.$relate->image_name)}}">
                                <img class="pic-2" src="{{asset('images/products/'.$relate->image_name)}}">
                            </a>
                            <ul class="social">
                                <li><a href="{{route('product.show',['id'=>$relate->product_id])}}" data-tip="Chi tiết sản phẩm"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#" data-tip="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                            <span class="product-new-label">New</span>
                            <span class="product-discount-label">-10%</span>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">{{$relate->product_name}}</a></h3>
                            <div class="price">
                                {{number_format($relate->promo_price)}}
                                <span>{{number_format($relate->unit_price)}}</span>
                            </div>
                            <a class="add-to-cart" href="">Thêm vào giỏ hàng</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>

    </div>
</div>
@endsection