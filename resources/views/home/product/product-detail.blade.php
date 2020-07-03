@extends('home.layouts.app')
@section('content')
<section class="page-banner-section my-4">
    <div class="container">
        <ul class="page-depth">
            <li><a href="{{route('home')}}"> {{ __('home')}}</a></li>
            <li class="bt"><a>{{ __('product detail')}}</a></li>
            <li class="bt"><a href="{{route('product.show',['name'=>$p_detail->product_name_slug])}}">{{$p_detail->product_name}}</a></li>


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
                <h3 class="p-price">{{number_format($p_detail->promo_price)}}<sup>đ</sup></h3>
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
                    <p> {{ __('quantity')}}</p>
                    <div class="pro-qty">
                        <span class="decb qtybtn">-</span>
                        <input type="text" value="1" class="count">
                        <span class="incb qtybtn">+</span></div>
                </div>
                <a  class="site-btn cart" data-product_id="{{$p_detail->product_id}}" data-user="{{ Auth::check() ? '1' : '0'}}">{{ __('add cart')}}</a>

            </div>
        </div>
        <hr>
        <div class="row justify-content-center">
            <div class="col-8 ">
                <nav>
                    <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">{{ __('product description')}}</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">{{ __('customer feedback')}}</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="name"> {{ __('product name')}}</td>
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

                                    <td class="name"> {{ __('description')}}</td>
                                    <td>{{$p_detail->describe}}</td>

                                </tr>
                                <tr>

                                    <td class="name"> {{ __('view')}}</td>
                                    <td>{{$p_detail->view_count}}</td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="reviews">
                            <h5> {{ __('your review')}}</h5>
                            <form action={{route('feedback.store')}} method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"> {{ __('email address')}}</label>
                                    @if (Auth::check())
                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" value="{{ Auth::user()->email}}" disabled>
                                    @else
                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required>
                                    @endif
                                </div>
                                <input type="hidden" class="form-control" name="product_id" id="exampleFormControlInput1" value="{{$p_detail->product_id}}">
                                @if (Auth::check())
                                <input type="hidden" class="form-control" name="user_id" id="exampleFormControlInput1" value="{{Auth::User()->id}}">     
                                @endif
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">{{ __('your review')}}</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="comment"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">{{ __('comment')}}</button>
                            </form>
                        </div>
                        @if (count($list_comment)>0)
                            @foreach ($list_comment as $ls_comment)
                            <div class="reviews">
                                <div class="row blockquote review-item">
                                    <div class="col-md-3 text-center">
                                        <img class="rounded-circle reviewer" src="http://standaloneinstaller.com/upload/avatar.png">
                                        <div class="caption">
                                            <small>by <a href="#joe"> {{$ls_comment->name}}</a></small>
                                        </div>
    
                                    </div>
                                    <div class="col-md-9">
                                        <h4>{{$ls_comment->name}}</h4>
                                        <div class="ratebox text-center" data-id="0" data-rating="5"></div>
                                        <p class="review-text">{{$ls_comment->feedback_comment}}</p>
    
                                        <small class="review-date">{{$ls_comment->created_at}}</small>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @else
                            
                        @endif
                       
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
                        <span> {{ __('product')}}</span>
                        <h1>{{ __('relate product')}}
                        </h1>
                    </div>
                    <div class="right-part">
                        <a class=" button-one" href="{{route('product.all')}}"> {{ __('see it all')}}</a>
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
                            <a href="{{route('product.show',['name'=>$relate->product_name_slug])}}">
                                <img class="pic-1" src="{{asset('images/products/'.$relate->image_name)}}">
                                <img class="pic-2" src="{{asset('images/products/'.$relate->image_name)}}">
                            </a>
                            <ul class="social">
                                <li><a href="{{route('product.show',['name'=>$relate->product_name_slug])}}" data-tip="{{ __('product detail')}}"><i class="fa fa-eye"></i></a></li>
                                <li><a class="cart" data-tip=" {{ __('add cart')}}" data-product_id="{{$relate->product_id}}" data-user="{{ Auth::check() ? '1' : '0'}}"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                            <span class="product-new-label"> {{ __('new')}}</span>
                            <span class="product-discount-label">-{{(round(100*($relate->unit_price-$relate->promo_price)/$relate->unit_price)) }}%</span>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="{{route('product.show',['name'=>$relate->product_name_slug])}}">{{$relate->product_name}}</a></h3>
                            <div class="price">
                                {{number_format($relate->promo_price)}}<sup>đ</sup>
                                <span>{{number_format($relate->unit_price)}}<sup>đ</sup></span>
                            </div>
                            <a class="add-to-cart cart" data-product_id="{{$relate->product_id}}" data-user="{{ Auth::check() ? '1' : '0'}}"> {{ __('add cart')}}</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>

    </div>
</div>
@endsection