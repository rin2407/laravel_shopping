$(document).ready(function() {
    var timeout = null;
    $("#search").keyup(function() {
        clearTimeout(timeout);
        var txt = $('#search').val();
        $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });          
        var _token = $('input[name="_token"]').val();
        var origin = window.location.origin;
        if (txt == "") {
            $(".hienthitimkiem").css("display", "none");
        } else {
            timeout = setTimeout(function() {
                $.ajax({
                    url: origin + "/home/product-search-ajax",
                    type: "post",
                    data: { txt: txt, _token: _token },
                    asyno: true,
                    success: function(kq) {
                        $(".hienthitimkiem").html(kq);
                        $(".hienthitimkiem").css("display", "block");
                    }
                });
            }, 1000);
        }
    });
});


$(document).ready(function() {
    $("body").click(function() {
        $(".hienthitimkiem").hide();
    });
});