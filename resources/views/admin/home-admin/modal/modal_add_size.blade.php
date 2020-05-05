<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <form action="{{route('size.store')}}" method="post">
        @csrf
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Add size</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">size name</label>
                <input type="text" class="form-control" id="recipient-name" name="size_name" required>
                @if($errors->has('size_name'))
                   <p style="size: red">{{$errors->first('size_name')}}</p>
                @endif
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary add_category">Add</button>
        </div>
      </div>
    </div>
</form>
  </div>