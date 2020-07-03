<div id="applicantEditModal" class="modal modal-danger fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
             <form action="{{route('cart.destroy')}}" method="POST" class="remove-record-model">
                @method('delete')
               @csrf
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <h5>{{__('You want to delete the product from the cart?')}}</h5>
                <input type="hidden" name="category_id_delete" id="category_id">
                <br>
                <strong class="text-danger">{{__('warning:')}} </strong>
                <p>-{{__('Product in your cart will be deleted')}}</p>
                <div class="form-group">
                    <input type="hidden" class="form-control" name="cart_id" value="{{$c_detail->cart_id}}">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">{{__('close')}}</button>
                <button type="submit" class="btn btn-danger waves-effect remove-data-from-delete-form">{{__('delete')}}</button>
            </div>

             </form>
        </div>
    </div>
</div>