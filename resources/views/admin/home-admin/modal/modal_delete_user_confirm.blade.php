<div id="applicantDeleteModal" class="modal modal-danger fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
             <form action="{{route('user.destroy')}}" method="POST" class="remove-record-model">
               @csrf
               @method('delete')
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title text-center" id="custom-width-modalLabel">Delete confirm</h4>
            </div>
            <div class="modal-body">
                <h4>Are you sure you want to delete?</h4>
                <input type="hidden", name="id_delete" id="user_id">
                <br>
                <strong class="text-danger">Warning: </strong>
                <p>Users can not log into the system</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger waves-effect remove-data-from-delete-form">OK.Delete</button>
            </div>

             </form>
        </div>
    </div>
</div>