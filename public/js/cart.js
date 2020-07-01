$(document).ready(function() {
    var timeout = null;
    $('.cart').click(function() {
        clearTimeout(timeout);
        var product_id = $(this).attr("data-product_id");
        var user_id = $(this).attr("data-user");
        var data_total= $(this).closest("body").find(".cart-number").text();
        if (user_id == 1) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var _token = $('meta[name="csrf_token"]').attr('content');
            var origin = window.location.origin;
            var update_cart = $(this).closest("body").find(".cart-number");
            timeout = setTimeout(function() {
                $.ajax({
                    url: origin + "/user/cart",
                    type: "post",
                    data: { data_product_id: product_id, data_token: _token },
                    asyno: true,
                    success: function(kq) {
                        if (kq == "yes") {
                            toastr.error('Products already in the cart');
                        } else {
                            data_total= parseInt(data_total)+1;
                            toastr.success('Product added successfully');
                            update_cart.html(data_total);
                        }
                    }
                });
            }, 500);
        } else {
            toastr.warning('You need to log in to make a purchase');
        }

    });
});
$(document).ready(function() {
    var timeout = null;
    $('.count').prop('disabled', true);
    $(document).on('click', '.inc', function() {
        clearTimeout(timeout);
        var origin = window.location.origin;
        var quantity_inc = parseInt($(this).prev().val()) + 1;
        $(this).prev().val(parseInt($(this).prev().val()) + 1);
        var amount_inc = $(this).attr("data-amount-inc");
        var product_id = $(this).attr("data-product-id");
        var total_price_old = $(this).closest("tr").find(".total-col h4").text()
        var total_price_old_split= total_price_old.split(",")
        var price = $(this).closest("tr").find(".pc-title p").text()
        var price_split = price.split(",")
        var update_total = $(this).closest("tr").find(".total-col h4");
        // total cart
        var total_cost = $(this).closest("body").find(".cost-price").text();
        var total_cost_plit= total_cost.split(",");
        var total_cost_value=total_cost_plit[0];
        var update_total_cost= $(this).closest("body").find(".cost-price");
        var update_total_cost_continue= $(this).closest("body").find(".cost-price-continue");
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
                        var total = quantity_inc * parseInt(price_split[0])
                        update_total.html(total + ",000 ₫")
                        var cost_new= (total + parseInt(total_cost_value))-parseInt(total_price_old_split[0])
                        update_total_cost.html(cost_new + ",000 ₫")
                        update_total_cost_continue.html(cost_new + ",000 ₫")
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
            var price = $(this).closest("tr").find(".pc-title p").text()
            var total_price_old = $(this).closest("tr").find(".total-col h4").text()
            var total_price_old_split= total_price_old.split(",")
            var price_split = price.split(",")
            var update_total = $(this).closest("tr").find(".total-col h4");
        // total cart
        var total_cost = $(this).closest("body").find(".cost-price").text();
        var total_cost_plit= total_cost.split(",");
        var total_cost_value=total_cost_plit[0];
        var update_total_cost= $(this).closest("body").find(".cost-price");
        var update_total_cost_continue= $(this).closest("body").find(".cost-price-continue");

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
                        var total = quantity_dec  * parseInt(price_split[0])
                        update_total.html(total + ",000 ₫")
                        var cost_new= (total + parseInt(total_cost_value))-parseInt(total_price_old_split[0])
                        update_total_cost.html(cost_new + ",000 ₫")
                        update_total_cost_continue.html(cost_new + ",000 ₫")

                    }
                });
            }, 300);

            return false;
        }
    });

});