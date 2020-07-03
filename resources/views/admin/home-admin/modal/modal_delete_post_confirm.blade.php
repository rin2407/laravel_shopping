<div id="applicantEditModal" class="modal modal-danger fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
             <form action="{{route('post.destroy')}}" method="POST" class="remove-record-model">
                @method('delete')
               @csrf
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title text-center" id="custom-width-modalLabel">Xóa {{$ls_post->post_title}}</h4>
            </div>
            <div class="modal-body">
                <h4>Bạn có chắc muốn xóa?</h4>
                <input type="hidden" name="category_id_delete" id="category_id">
                <br>
                <strong class="text-danger">Cảnh báo: </strong>
                <p>Bài viết sẽ bị xóa</p>
                <div class="form-group">
                    <input type="hidden" class="form-control" name="post_id" value="{{$ls_post->post_id}}">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Đóng</button>
                <button type="submit" class="btn btn-danger waves-effect remove-data-from-delete-form">Xóa</button>
            </div>

             </form>
        </div>
    </div>
</div>