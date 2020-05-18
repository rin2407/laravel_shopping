@extends('home.layouts.app')
@section('content')
<section class="checkout-section spad">
    <div class="container">
        <div class="row my-5">
            <div class="col-lg-8 order-2 order-lg-1">
                <form class="checkout-form" action={{route('checkout.update')}} method="POST">
                    @csrf
                    <div class="cf-title">
                        Địa chỉ thanh toán</div>
                    <div class="row address-inputs">
                        <div class="col-md-12">
                            <input type="text" placeholder="Địa chỉ" name="address" value={{$user->address}}>
                            @if($errors->has('address'))
                             <p style="color: red">{{$errors->first('address')}}</p>
                            @endif
                            <input type="text" placeholder="Số điện thoại" name="phone" value={{$user->phone}}>
                            @if($errors->has('phone'))
                           <p style="color: red">{{$errors->first('phone')}}</p>
                            @endif
                        </div>
                    </div>
                    <button class="site-btn submit-order-btn">Đặt Hàng</button>
                </form>
            </div>
            <div class="col-lg-4 order-1 order-lg-2">
                <div class="checkout-cart">
                    <h3>Giỏ hàng của bạn</h3>
                    <ul class="product-list">
                        <?php $total_money=0 ?>
                        @foreach ($list_cart as $ls_cart)
                        <li>
                            <h6>{{$ls_cart->product_name}}</h6>
                            <p>{{number_format($ls_cart->promo_price)}} X {{$ls_cart->quantity}} = {{number_format($ls_cart->promo_price * $ls_cart->quantity)}}<sup>đ</sup></p>
                        </li>
                        <?php $total_money+=($ls_cart->promo_price * $ls_cart->quantity) ?>
                        @endforeach
                    </ul>
                    <ul class="price-list">
                        <li>Tổng<span>{{number_format($total_money)}}<sup>đ</sup></span></li>
                        <li>Shipping<span>free</span></li>
                        <li class="total">Tổng<span>{{number_format($total_money)}}<sup>đ</sup></span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection