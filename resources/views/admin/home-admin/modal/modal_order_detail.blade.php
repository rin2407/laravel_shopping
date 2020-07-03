<div id="applicantEditModal" class="modal modal-danger fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title text-center" id="custom-width-modalLabel"></h4>
            </div>
            <?php 
            use Illuminate\Support\Facades\DB;
            $order_detail= DB::table('order_items')
                        ->join('orders','order_items.order_id','=','orders.order_id')
                        ->join('products','order_items.product_id','=','products.product_id')
                        ->where('order_items.order_id',$ls_order->order_id)
                        ->get();
            $stt=1;
             ?>
            <div class="modal-body">
                <table class="table table-striped table-dark">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Số lượng</th>
                      </tr>
                    </thead>
                    <tbody>
                          @foreach ($order_detail as $order_details)
                          <tr>
                          <th scope="row">{{$stt++}}</th>
                          <td>{{ $order_details->product_name }}</td>
                          <td>{{number_format($order_details->promo_price)}}<sup>đ</sup></td>
                          <td>{{$order_details->quantity}}</td>
                        </tr>
                          @endforeach
                    </tbody>
                  </table>
            </div>
            <div class="modal-footer">
            </div>

        </div>
    </div>
</div>