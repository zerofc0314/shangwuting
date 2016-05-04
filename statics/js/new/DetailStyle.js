
var numlist = new Array("#DBDBDB", "#E3C9F6", "#CBEDF7", "#EAF7CB", "#FCE1B2");
$(".CONT_info").find("img").click(function () {
    var num = parseInt($(this).attr("num"));
   // alert(num);
    $(".CONT_p").css("background", numlist[num]);
});
$(".CONT_info").find("span").click(function () {
    var size = $(this).attr("size") + "px";
    //alert(size);
    $(".CONT_p").css("font-size", size);
});