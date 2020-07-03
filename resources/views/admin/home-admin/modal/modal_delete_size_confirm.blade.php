<div id="applicantEditModal" class="modal modal-danger fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
             <form action="{{route('size.destroy')}}" method="POST" class="remove-record-model">
                @method('delete')
               @csrf
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title text-center" id="custom-width-modalLabel">Xóa {{$ls_size->size_name}}</h4>
            </div>
            <div class="modal-body">
                <h4>Are you sure you want to delete?</h4>
                <input type="hidden" name="category_id_delete" id="category_id">
                <br>
                <strong class="text-danger">Warning: </strong>
                <p>The size will be deleted</p>
                <div class="form-group">
                    <input type="hidden" class="form-control" name="size_id" value="{{$ls_size->size_id}}">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger waves-effect remove-data-from-delete-form">OK.Delete</button>
            </div>

             </form>
        </div>
    </div>
</div>