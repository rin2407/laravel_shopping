$(document).ready(function() {
    var timeout = null;
    $(".order").change(function() {
        clearTimeout(timeout);
        var order = $(this).val();
        id_order = $(this).attr("data-idOrder");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var _token = $('meta[name="csrf_token"]').attr('content');
        var origin = window.location.origin;
        timeout = setTimeout(function() {
            $.ajax({
                url: origin + "/admin/order-management/order",
                type: "post",
                data: { data_order: order, data_idOrder: id_order, data_token: _token },
                asyno: true,
                success: function(kq) {
                    location.reload();
                }
            });
        }, 1000);
    });
});