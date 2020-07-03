@extends('home.layouts.app')
@section('content')
<section class="checkout-section spad">
    <div class="container">
        <div class="row my-5">
            <div class="col-lg-8 order-2 order-lg-1">
                <form class="checkout-form" action={{route('checkout.update')}} method="POST">
                    @csrf
                    <div class="cf-title">
                        {{__('Payment address')}}</div>
                    <div class="row address-inputs">
                        <div class="col-md-12">
                            <input type="text" placeholder="{{__('address')}}" name="address" value="{{$user->address}}">
                            @if($errors->has('address'))
                             <p style="color: red">{{$errors->first('address')}}</p>
                            @endif
                            <input type="text" placeholder="{{__('phone')}}" name="phone" value={{$user->phone}}>
                            @if($errors->has('phone'))
                           <p style="color: red">{{$errors->first('phone')}}</p>
                            @endif
                        </div>
                    </div>
                    <button class="site-btn submit-order-btn">{{__('order')}}</button>
                </form>
            </div>
            <div class="col-lg-4 order-1 order-lg-2">
                <div class="checkout-cart">
                    <h3>{{__('your cart')}}</h3>
                    <ul class="product-list">
                        <?php $total_money=0 ?>
                        @foreach ($list_cart as $ls_cart)
                        <li>
                            <h6>{{$ls_cart->product_name}}</h6>
                            <p>{{$ls_cart->promo_price}} X {{$ls_cart->quantity}} = {{$ls_cart->promo_price * $ls_cart->quantity}}đ</p>
                        </li>
                        <?php $total_money+=($ls_cart->promo_price * $ls_cart->quantity) ?>
                        @endforeach
                    </ul>
                    <ul class="price-list">
                        <li>{{__('total')}}<span>{{$total_money}}đ</span></li>
                        <li>Shipping<span>free</span></li>
                        <li class="total">{{__('total')}}<span>{{$total_money}}đ</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection