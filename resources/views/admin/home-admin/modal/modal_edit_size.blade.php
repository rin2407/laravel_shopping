<div id="applicantEditModal" class="modal modal-danger fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
             <form action="{{route('size.update')}}" method="POST" class="remove-record-model">
               @csrf
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title text-center" id="custom-width-modalLabel">Size: {{$ls_size->size_name}}</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <input type="hidden" class="form-control" name="size_id" value="{{$ls_size->size_id}}">
                    <label for="recipient-name" class="col-form-label">size name</label>
                    <input type="text" class="form-control" id="recipient-name" name="size_name" value="{{$ls_size->size_name}}" required>
                    @if($errors->has('size_name'))
                       <p style="size: red">{{$errors->first('size_name')}}</p>
                    @endif
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success waves-effect remove-data-from-delete-form">OK.Edit</button>
            </div>

             </form>
        </div>
    </div>
</div>