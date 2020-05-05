    $(document).ready(function() {
        $("#ImageMedias").change(function() {
            if (typeof(FileReader) != "undefined") {
                var dvPreview = $("#divImageMediaPreview");
                dvPreview.html("");
                $($(this)[0].files).each(function() {
                    var file = $(this);
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        var img = $("<img />");
                        img.attr("style", "width:100%; height:300px; padding: 10px");
                        img.attr("src", e.target.result);
                        dvPreview.append(img);
                    }
                    reader.readAsDataURL(file[0]);
                });
            } else {
                alert("This browser does not support HTML5 FileReader.");
            }
        });
    });
    $(document).ready(function() {
        $("input[name='promo_price']").change(function() {
            var promo_price = parseInt($(this).val());
            var unit_price = parseInt($("input[name = 'unit_price']").val());
            if (promo_price >= unit_price) {
                $(this).next().show();
                $(this).val(0);
            } else {
                $(this).next().hide();
            }
        })
    })

    function FormatNumber(str) {
        var strTemp = GetNumber(str);
        if (strTemp.length <= 3) {
            return strTemp;
        }
        var strResult = "";
        for (var i = 0; i < strTemp.length; i++) {
            strTemp = strTemp.replace(".", "");
        }
        var m = strTemp.lastIndexOf(",");
        if (m == -1) {
            for (var i = strTemp.length; i >= 0; i--) {
                if (strResult.length > 0 && (strTemp.length - i - 1) % 3 == 0) {
                    strResult = "." + strResult;
                }
                strResult = strTemp.substring(i, i + 1) + strResult;
            }
        } else {
            var strinteger = strTemp.substring(0, strTemp.lastIndexOf(","));
            var strdecimal = strTemp.substring(strTemp.lastIndexOf(","), strTemp.length);
            var flag = 0;
            for (var i = strinteger.length; i >= 0; i--) {
                if (strResult.length > 0 && flag == 4) {
                    strResult = "." + strResult;
                    flag = 1;
                }
                strResult = strinteger.substring(i, i + 1) + strResult;
                flag = flag + 1;
            }
            strResult = strResult + strdecimal;
        }
        return strResult;
    }

    function GetNumber(str) {
        var count = 0;
        for (var i = 0; i < str.length; i++) {
            var temp = str.substring(i, i + 1);
            if (!(temp == "." || temp == "," || (temp >= 0 && temp <= 9))) {
                return str.substring(0, i);
            }
            if (temp == " ") {
                return str.substring(0, i);
            }
            if (temp == ",") {
                if (count > 0)
                    return str.substring(0, i);
                count++;
            }
        }
        return str;
    }