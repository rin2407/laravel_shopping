@extends('home.layouts.app')
@section('content')
<section class="cart-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="cart-table">
                    <h3>Your Cart</h3>
                    <div class="cart-table-warp" tabindex="1" style="overflow: hidden; outline: none;">
                        <table>
                            <thead>
                                <tr>
                                    <th class="product-th">Product</th>
                                    <th class="quy-th">Quantity</th>
                                    <th class="size-th">SizeSize</th>
                                    <th class="total-th">Price</th>
                                    <th class="action-th">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $total_money=0 ?>
                                @foreach ($cart_detail as $c_detail)
                                <tr>
                                    <td class="product-col">
                                        <img src="images/blog-image-4.jpg" alt="">
                                        <div class="pc-title">
                                            <h4>{{$c_detail->product_name}}</h4>
                                            <p>{{number_format($c_detail->promo_price)}}</p>
                                        </div>
                                    </td>
                                    <td class="quy-col">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <span class="dec qtybtn">-</span>
                                                <input type="text" value="{{$c_detail->quantity}}" class="count">
                                                <span class="inc qtybtn">+</span></div>
                                        </div>
                                    </td>
                                    <td class="size-col">
                                        <h4>Size M</h4>
                                    </td>
                                    <td class="total-col">
                                        <h4>{{number_format($c_detail->promo_price)." ₫"}}</h4>
                                    </td>
                                    <td class="action-col">
                                        <form action="">
                                            <button class="delete">
                                                <h4><i class="far fa-trash-alt"></i></h4>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                <?php $total_money+= ($c_detail->promo_price) * ($c_detail->quantity) ?>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 card-right">
                <div class="cart-table-2">
                    <h3>Tổng tiền</h3>
                    <table>
                        <tbody>
                            <tr>
                                <th class="total-cost">Tổng tiền</th>
                                <td>{{number_format($total_money)." ₫"}}</td>
                            </tr>
                            <tr>
                                <th>Tổng</th>
                                <td>{{number_format($total_money)." ₫"}}</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="" class="site-btn">Proceed to checkout</a>

                </div>

                <a href="{{route('home')}}" class="site-btn sb-dark mt-5">Continue shopping</a>
            </div>
        </div>
    </div>
</section>
@endsection