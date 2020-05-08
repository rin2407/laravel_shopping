$(document).ready(function() {
    $('.banner').change(function() {
        var banner = $(this).val();
        id_banner = $(this).attr("data-idBanner");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var _token = $('meta[name="csrf_token"]').attr('content');
        var origin = window.location.origin;
        $.ajax({
            url: origin + "/admin/banner/banner-action",
            type: "post",
            data: { data_banner: banner, data_id_banner: id_banner, data_token: _token },
            asyno: true,
            success: function(kq) {
                if (kq == 'hide') {
                    toastr.warning('Hide banner');
                } else {
                    toastr.success('Show banner');
                }
            }
        });
        return false;
    });
});