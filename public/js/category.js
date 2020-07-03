$(document).ready(function(){
    $('.category').click(function(){
        var origin = window.location.origin;
        var _token = $('meta[name="csrf_token"]').attr('content');
        let category_id= $(this).attr('category-id');
        $(".shop-cls__0000").css("color","#414141")
        $(this).children().css("color","#f51167");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: origin + "/home/select-category-ajax",
            type: "post",
            data: { category_id: category_id, _token: _token },
            asyno: true,
            success: function(kq) {
                $(".select-result").html(kq);
                $(".select-start").css("display","none")
                // $(".select-result").css("display", "block");
            }
        });
    })
})

