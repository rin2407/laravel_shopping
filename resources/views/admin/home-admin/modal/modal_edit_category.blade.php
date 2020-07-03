<div id="applicantEditModal" class="modal modal-danger fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
             <form action="{{route('category.update')}}" method="POST" class="remove-record-model">
               @csrf
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title text-center" id="custom-width-modalLabel">Loại: {{$ls_category->category_name}}</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <input type="hidden" class="form-control" name="category_id" value="{{$ls_category->category_id}}">
                    <label for="recipient-name" class="col-form-label">Tên loại sản phẩm</label>
                    <input type="text" class="form-control" id="recipient-name" name="category_name" value="{{$ls_category->category_name}}" required>
                    @if($errors->has('category_name'))
                       <p style="color: red">{{$errors->first('category_name')}}</p>
                    @endif
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">đóng</button>
                <button type="submit" class="btn btn-success waves-effect remove-data-from-delete-form">Cập nhật</button>
            </div>

             </form>
        </div>
    </div>
</div>