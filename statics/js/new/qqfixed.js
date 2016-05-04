$(document).ready(function () {


    var qqHtml =
"<div style=\"z-index: 1000; position:fixed; top: 240px; right: 0px;\" id=\"divMenu\">" +
"<table id=\"qqtb\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">" +
  "<tr>" +
    "<td id=\"qqleft\" align=\"right\"><a href=\"#\"><img src=\"/OnlineService/images/zxzx_01.gif\" border=\"0\"></a></td>" +
    "<td id=\"qqright\" align=\"left\" valign=\"top\" style=\"display:none;\">" +
      "<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">" +
         "<tr><td><img src=\"/OnlineService/images/zxzx_02.gif\" border=\"0\" usemap=\"#Map\"></td></tr>" +
         "<tr align=\"center\" valign=\"top\">" +
           "<td style=\"background:url(/OnlineService/images/zxzx_03.gif)\">      " +
                "<table width=\"90%\" border=\"0\" align=\"center\" cellpadding=\"4\" cellspacing=\"0\">" +
                 $(".QQ").val() +
                "</table>" +
           "</td>" +
        "</tr>" +
         "<tr align=\"center\" valign=\"top\">" +
             "<td width=\"109\" style=\"height:65px; line-height:19px; padding-bottom:0px; font-size:12px; color:#004B9F; background:url(/OnlineService/images/zxzx_04.gif);\">" +
             "&nbsp;<br/>&nbsp;<br/>" +
             "<strong>" + $(".WZMC").val() + "</strong>" +
             "</td>" +
        "</tr>" +
      "</table>" +
  "</tr>" +
"</table>" +
"</div>";

    if (!window.XMLHttpRequest) {//ie6单独处理

        qqHtml =
"<div style=\"z-index: 1000; top: 240px; right: 0px;bottom:auto; position:absolute;top: expression(eval(document.documentElement.scrollTop + 240 - (parseInt(this.currentStyle.marginTop, 10) || 0) - (parseInt(this.currentStyle.marginBottom, 10) || 0)));\"\" id=\"divMenu\">" +
"<table id=\"qqtb\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">" +
  "<tr>" +
    "<td id=\"qqleft\" align=\"right\"><a href=\"#\"><img src=\"/OnlineService/images/zxzx_01.gif\" border=\"0\"></a></td>" +
    "<td id=\"qqright\" align=\"left\" valign=\"top\" style=\"display:none;\">" +
      "<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">" +
         "<tr><td><img src=\"/OnlineService/images/zxzx_02.gif\" border=\"0\" usemap=\"#Map\"></td></tr>" +
         "<tr align=\"center\" valign=\"top\">" +
           "<td style=\"background:url(/OnlineService/images/zxzx_03.gif)\">      " +
                "<table width=\"90%\" border=\"0\" align=\"center\" cellpadding=\"4\" cellspacing=\"0\">" +
                 $(".QQ").val() +
                "</table>" +
           "</td>" +
        "</tr>" +
         "<tr align=\"center\" valign=\"top\">" +
             "<td width=\"109\" style=\"height:65px; line-height:19px; padding-bottom:0px; font-size:12px; color:#004B9F; background:url(/OnlineService/images/zxzx_04.gif);\">" +
             "&nbsp;<br/>&nbsp;<br/>" +
             "<strong>" + $(".WZMC").val() + "</strong>" +
             "</td>" +
        "</tr>" +
      "</table>" +
  "</tr>" +
"</table>" +
"</div>";

    }



    $(qqHtml).appendTo("body");
    $("#qqtb").mouseover(function () {
        $("#qqright").show();

        if (window.XMLHttpRequest) //ie6单独处理
        {
            var divheight = ($("#qqright").height() - 100) / 2;
            $("#divMenu").css("top", (240 - divheight) + "px");
        }

    }).mouseout(function () {
        $("#divMenu").css("top", "240px");
        $("#qqright").hide();
    });


});