$(document).ready(function() {
    var timeout = null;
    $('.cart').click(function() {
        clearTimeout(timeout);
        var product_id = $(this).attr("data-product_id");
        var user_id = $(this).attr("data-user");
        if (user_id == 1) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var _token = $('meta[name="csrf_token"]').attr('content');
            var origin = window.location.origin;
            timeout = setTimeout(function() {
                $.ajax({
                    url: origin + "/user/cart",
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
                            }, 500);
                        }
                    }
                });
            }, 1000);
        } else {
            toastr.warning('Bạn cần đăng nhập để mua hàng');
        }

    });
});
$(document).ready(function() {
    var timeout = null;
    $('.count').prop('disabled', true);
    $(document).on('click', '.inc', function() {
        clearTimeout(timeout);
        var quantity_inc = parseInt($(this).prev().val()) + 1;
        $(this).prev().val(parseInt($(this).prev().val()) + 1);
        var amount_inc = $(this).attr("data-amount-inc");
        var product_id = $(this).attr("data-product-id");
        var origin = window.location.origin;
        if (quantity_inc > amount_inc) {
            $(this).prev().val(amount_inc);
            toastr.error('Exceeding the quantity of products in stock');
        } else {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var _token = $('meta[name="csrf_token"]').attr('content');
            timeout = setTimeout(function() {
                $.ajax({
                    url: origin + "/user/cart/quantity-inc",
                    type: "post",
                    data: { data_quantity: quantity_inc, data_amount: amount_inc, data_product_id: product_id, data_token: _token },
                    asyno: true,
                    success: function(kq) {
                        location.reload();
                    }
                });
            }, 500);
            return false;
        }
    });
    $(document).on('click', '.dec', function() {
        clearTimeout(timeout);
        if ($(this).next().val() < 2) {
            $(this).next().val(1);
        } else {
            var quantity_dec = parseInt($(this).next().val()) - 1;
            $(this).next().val(parseInt($(this).next().val()) - 1);
            var amount_dec = $(this).attr("data-amount-dec");
            var product_id = $(this).attr("data-product-id");
            var origin = window.location.origin;
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var _token = $('meta[name="csrf_token"]').attr('content');
            timeout = setTimeout(function() {
                $.ajax({
                    url: origin + "/user/cart/quantity-inc",
                    type: "post",
                    data: { data_quantity: quantity_dec, data_amount: amount_dec, data_product_id: product_id, data_token: _token },
                    asyno: true,
                    success: function(kq) {
                        location.reload();
                    }
                });
            }, 500);

            return false;
        }
    });

});