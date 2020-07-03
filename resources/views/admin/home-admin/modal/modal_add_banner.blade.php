<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Thêm banner</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{route('banner.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Hình ảnh</label>
                   <div class="col-sm-10">
                    <input id="ImageMedias" multiple="multiple" name="image" type="file"
                    accept=".jfif,.jpg,.jpeg,.png,.gif" class="custom-file-input"  value=""> 
                    @if($errors->has('image'))
                        <p style="color: red">{{$errors->first('image')}}</p>
                    @endif     
                </div>                             
                    <div id="divImageMediaPreview"></div>
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