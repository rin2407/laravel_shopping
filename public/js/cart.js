$(document).ready(function() {
    var timeout = null;
    $('.cart').click(function() {
        clearTimeout(timeout);
        var product_id = $(this).attr("data-product_id");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var _token = $('meta[name="csrf_token"]').attr('content');
        timeout = setTimeout(function() {
            $.ajax({
                url: "http://127.0.0.1:8000/user/cart",
                type: "post",
                data: { data_product_id: product_id, data_token: _token },
                asyno: true,
                success: function(kq) {
                    if (kq == "yes") {
                        toastr.error('Sản phẩm đã có trong giỏ hàng');
                    } else {
                        toastr.success('Sản phẩm đã được thêm vào giỏ hàng thành công');
                        setTimeout(function() {
                            location.reload();
                        }, 1000);
                    }
                }
            });
        }, 300);

    });
});