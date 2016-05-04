function objFocusNote(obj,noteMsg) {
    if ($(obj).val() == "") {//如果初始值为空，设置
        $(obj).val(noteMsg).css("color","#999");
    }

    $(obj).focusin(function () {
        if ($(this).val() == noteMsg) {
            $(this).val("").css("color", "#4C4C4C");
        }
    }).focusout(function () {
        if ($(this).val() == "") {
            $(this).val(noteMsg).css("color", "#999");
        }
    });
}



//$(".txtvlaue").val("请输入你要(搜索/提问/回答)的关键字");
//$(".txtvlaue").focusout(function () {
//    if ($(".txtvlaue").val() == "") {
//        $(".txtvlaue").val("请输入你要(搜索/提问/回答)的关键字");
//    }
//});
//$(".txtvlaue").focusin(function () {
//    if ($(".txtvlaue").val() == "请输入你要(搜索/提问/回答)的关键字") {
//        $(".txtvlaue").val("");
//    }
//});

$("#ssda").click(function () {
    if ($(".txtvlaue").val() == "" || $(".txtvlaue").val() == "请输入你要(搜索/提问/回答)的关键字") {
        window.location = "/WMZD/WMZDList.aspx";
    } else {
        window.location = "/WMZD/WMZDList.aspx?SSNR=" + encodeURIComponent($(".txtvlaue").val());
    }
});

$("#wytw").click(function () {
    //    if ($(".dlyhid").val() == "-1" || $(".dlyhid").val() == "") {
    //        var yhid = $(".dlyhid").attr("id");
    //        window.top.createDIV(window, "/Themes/cdweb/htm/Login.aspx?Controls=" + yhid + "&Button=ZJDL", "用户登录", 450, 265, window);
    //        return false;
    //    }
    window.location = "/WMZD/WMZDQuestion.aspx?SSNR=" + encodeURIComponent($(".txtvlaue").val());
});
$("#wyhd").click(function () {
    if ($(".txtvlaue").val() == "" || $(".txtvlaue").val() == "请输入你要(搜索/提问/回答)的关键字") {
        window.location = "/WMZD/WMZDList.aspx?WTZT=2";
    } else {
        window.location = "/WMZD/WMZDList.aspx?WTZT=2&SSNR=" + encodeURIComponent($(".txtvlaue").val());
    }
});