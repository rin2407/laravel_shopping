<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <form action="{{route('category.store')}}" method="post" id="form_add_category">
        @csrf
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h5 class="modal-title" id="staticBackdropLabel">Thêm loại sản phẩm</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center">
            <div class="form-group row">
                <label for="recipient-name" class="col-sm-3 col-form-label">Tên loại sản phẩm</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="recipient-name" name="category_name" required>
                @if($errors->has('category_name'))
                   <p style="color: red">{{$errors->first('category_name')}}</p>
                @endif
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
          <button type="submit" class="btn btn-primary add_category">Thêm</button>
        </div>
      </div>
    </div>
</form>
  </div>