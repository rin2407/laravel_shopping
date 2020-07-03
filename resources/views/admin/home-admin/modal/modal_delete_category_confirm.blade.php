<div id="applicantDeleteModal" class="modal modal-danger fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
             <form action="{{route('category.destroy')}}" method="POST" class="remove-record-model">
               @csrf
               @method('delete')
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title text-center" id="custom-width-modalLabel">Xác nhận xóa</h4>
            </div>
            <div class="modal-body">
                <h4>Bạn có chắc muốn xóa loại sản phẩm?</h4>
                <input type="hidden" name="category_id_delete" id="category_id">
                <br>
                <strong class="text-danger">Cảnh báo: </strong>
                <p>Loại sản phẩm sẽ bị xóa?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Đóng</button>
                <button type="submit" class="btn btn-danger waves-effect remove-data-from-delete-form">Xóa</button>
            </div>

             </form>
        </div>
    </div>
</div>