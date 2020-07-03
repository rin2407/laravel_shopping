{{__('thanks')}}
<table class="table">
    <thead>
      <tr>
        <th scope="col">STT</th>
        <th scope="col">Product</th>
        <th scope="col">Price</th>
        <th scope="col">Amount</th>
        <th scope="col">Total</th>
      </tr>
    </thead>
    <tbody>
      <?php $i=1 ?>
      @foreach ($order_detail as $item)
      <tr>
        <th>{{$i++}}</th>
        <td class="text-center">{{$item->product_name}}</td>
        <td class="text-center">{{$item->promo_price}}</td>
        <td class="text-center">{{$item->quantity}}</td>
        <td class="text-center">{{number_format($item->quantity*$item->promo_price)}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>