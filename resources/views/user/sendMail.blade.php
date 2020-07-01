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
        <td>{{$item->product_name}}</td>
        <td>{{$item->promo_price}}</td>
        <td>{{$item->quantity}}</td>
        <td>{{number_format($item->quantity*$item->promo_price)}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>