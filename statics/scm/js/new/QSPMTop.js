//给条件
function into() {
    // alert($(".ymonth").val());
    $.ajax({
        async: true, //是否异步
        type: "GET",
        url: "/AjaxHandler/QSPMTop.ashx?" + Math.random() + "&ContTop=" + $(".conttopcss").val() + "&YMonth=" + $(".ymonth").val() + "&" + Math.random(),
        dataType: "html",
        beforeSend: function (XMLHttpRequest) {
        },
        success: function (Msg, textStatus) {
            //if (typeof (func) == "function") {
            htmlrender(Msg);
            //}
        },
        complete: function (XMLHttpRequest, textStatus) {
        },
        error: function () {
        }
    });
}
