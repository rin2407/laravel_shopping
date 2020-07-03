@extends('home.layouts.app')
@section('content')
<section class="cart-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="cart-table">
                    <h3>{{__('your cart')}}</h3>
                    <div class="cart-table-warp" tabindex="1" style="overflow: hidden; outline: none;">
                       <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="product-th">{{__('product')}}</th>
                                    <th class="quy-th">{{__('amount')}}</th>
                                    <th class="total-th">{{__('price')}}</th>
                                    <th class="action-th">{{__('action')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $total_money=0 ?>
                                @if (count($cart_detail)>0)
                                @foreach ($cart_detail as $c_detail)
                                <tr>
                                    <td class="product-col">
                                        <img src="{{asset('images/products/'.$c_detail->image_name)}}" alt="">
                                        <div class="pc-title">
                                            <h4>{{$c_detail->product_name}}</h4>
                                            <p>{{number_format($c_detail->promo_price)}}<sup>đ</sup></p>
                                        </div>
                                    </td>
                                    <td class="quy-col">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <span class="dec qtybtn" data-amount-dec="{{$c_detail->amount}}" data-product-id="{{$c_detail->product_id}}">-</span>
                                                <input type="text" value="{{$c_detail->quantity}}" class="count" min="1">
                                                <span class="inc qtybtn" data-amount-inc="{{$c_detail->amount}}" data-product-id="{{$c_detail->product_id}}">+</span></div>
                                        </div>
                                    </td>
                                    <td class="total-col">
                                        <h4>{{number_format($c_detail->promo_price * $c_detail->quantity)}}<sup>đ</sup></h4>
                                    </td>
                                    <td class="action-col">
                                            <button class="delete">
                                                <h4><i class="far fa-trash-alt"></i></h4>
                                            </button>
                                            @include('home.cart.modal-delete-cart')
                                    </td>
                                </tr>
                                <?php $total_money+= ($c_detail->promo_price) * ($c_detail->quantity) ?>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="5">{{__('cart is empty')}}</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-lg-4 card-right">
                <div class="cart-table-2">
                    <h3>{{__('total money')}}</h3>
                    <table>
                        <tbody>
                            <tr>
                                <th class="total-cost">{{__('total money')}}</th>
                                <td class="cost-price">{{number_format($total_money)." ₫"}}</td>
                            </tr>
                            <tr>
                                <th>{{__('total')}}</th>
                                <td class="cost-price-continue">{{number_format($total_money)." ₫"}}</td

                            </tr>
                        </tbody>
                    </table>
                    @if (count($cart_detail) > 0)
                      <a href="{{route('checkout.edit',['id'=>Auth::user()->id])}}" class="site-btn">{{__('proceed to payment')}}</a>
                    @endif
                </div>
                <a href="{{route('home')}}" class="site-btn sb-dark mt-5">{{__('continue shopping')}}</a>
            </div>

            </div>
        </div>
    </div>
</section>
@endsection
@section('javascript')
    <script>
        $(document).on('click','.delete',function(){
        $(this).next().modal('show'); 
    });
    </script>
@endsection