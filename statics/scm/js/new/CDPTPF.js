$(document).ready(function () {

if(window.location.toString()=="http://www.tpsp.com.cn/Index.aspx"||window.location.toString()=="http://www.tpsp.com.cn/"||window.location.toString()=="http://www.tpsp.com.cn/Index.aspx"||window.location.toString()=="http://www.tpsp.com.cn/")
{

   // advertisement("adv1", "R", 20, "B", 120, "http://www.tpsp.com.cn/LMNR/LMNRDetail.aspx?PKID=16150", "/OnlineService/newshot.jpg", "/OnlineService/del_03.jpg", 1001, 450, 120);

   // advertisement("adv2", "L", 20, "T", 120, "http://www.tpsp.com.cn/LMNR/LMNRDetail.aspx?PKID=16150", "/OnlineService/newshot.jpg", "/OnlineService/del_03.jpg", 1001, 450, 120);

    //advertisement("adv3", "R", 0, "B", 0, "http://www.xdlex.com/", "/OnlineService/img_01.jpg", "/OnlineService/del_03.jpg", 1001, 210, 300);

advertisement("adv1", "R", 20, "T", 120, "http://www.tpsp.com.cn/AppDownPage/index.html", "/OnlineService/apponline_android.png", "/OnlineService/del_03.jpg", 1000, 380, 138);

    advertisement("adv2", "L", 20, "T", 120, "http://www.tpsp.com.cn/AppDownPage/index.html", "/OnlineService/apponline_ios.png", "/OnlineService/del_03.jpg", 1000, 380, 138);

   //advertisement("adv3", "R", 0, "B", 0, "", "/OnlineService/img_01.jpg", "/OnlineService/del_03.jpg", 1001, 210, 300);
}
else
{
    //advertisement("adv3", "R", 0, "B", 0, "http://www.tpsp.com.cn/advertisement_rs/index.html", "/OnlineService/img_011.jpg", "/OnlineService/del_03.jpg", 1001, 210, 300);

}

	 //advertisement("adv3", "R", 0, "B", 0, "http://www.tpsp.com.cn/advertisement_rs/index.html", "/OnlineService/img_011.jpg", "/OnlineService/del_03.jpg", 1001, 210, 300);

});


//居左(右)，距左(右)边线的距离，居顶(底)，据顶(底)边线的距离，点击链接，图片路径,关闭图片路径,zindex，高度，宽度
//TorB="B"时，必须传递GD
function advertisement(ID,RorL, RorLMargin, TorB, TorBPX, Url, Pic,CloPic,Zindex,GD,KD) {
    RL = "";
    if (RorL == "R") {
        RL = "right";
    }
    if (RorL == "L") {
        RL = "left";
    }
    TB = "";
    if (TorB == "T") {
        TB = "top";
    }
    if (TorB == "B") {
        TB = "bottom";
    }

    var OBJKD = "";
    var OBJGD = "";
    if (KD != undefined && KD != null && KD != "") {
        OBJKD = "width=" + KD;
    }
    if (GD != undefined && GD != null && GD != "") {
        OBJGD = "height=" + GD;
    }


    if (Url != undefined && Url != null && Url != "") {
        Url = "href=\"" + Url + "\"";
    }
    else {
        Url = "";
    }

    var Html;


    if (!window.XMLHttpRequest) {//ie6单独处理

        var height = TorBPX;

        if (TB == "bottom") {
            height = $(window).height() - parseInt(GD);
        }

        Html = "<div id=" + ID + " style=\"z-index: " + Zindex + ";top: " + height + "px;margin-" + RL + ":" + RorLMargin + "px;" + RL + ": 0px; bottom:auto;position:absolute; top: expression(eval(document.documentElement.scrollTop + " + height + " - (parseInt(this.currentStyle.marginTop, 10) || 0) - (parseInt(this.currentStyle.marginBottom, 10) || 0)));\"\" id=\"divMenu\">" +
        "<a " + Url + " target=\"_blank\"><img src=\"" + Pic + "\" " + OBJKD + " " + OBJGD + "/></a></div>"


        var RR = "";
        if (RorL == "R") {
            RR = RorLMargin + 5;
        }
        if (RorL == "L") {
            RR = RorLMargin + KD - 20;
        }

        Html += "<div id=\"clo_" + ID + "\" style=\"z-index: " + (Zindex + 1) + ";top: " + (height + 5) + "px;margin-" + RL + ":" + RR + "px;" + RL + ": 0px; bottom:auto;position:absolute; top: expression(eval(document.documentElement.scrollTop + " + (height+5) + " - (parseInt(this.currentStyle.marginTop, 10) || 0) - (parseInt(this.currentStyle.marginBottom, 10) || 0)));\"\" id=\"divMenu\">" +
        "<img src=\"" + CloPic + "\" style=\"cursor:pointer;\"/></div>"

    }
    else {
        Html = "<div id="+ID+" style=\"z-index: " + Zindex + "; position:fixed;" + RL + ": 0px;margin-" + RL + ":" + RorLMargin + "px; " + TB + ": " + TorBPX + "px; \" >" +
        "<a " + Url + " target=\"_blank\"><img src=\"" + Pic + "\" " + OBJKD + " " + OBJGD + "/></a></div>";


        var BB = "";
        if (TorB == "T") {
            BB = TorBPX + 5;
        }
        if (TorB == "B") {
            BB = GD -20;
        }

        var RR = "";
        if (RorL == "R") {
            RR = RorLMargin + 5;
        }
        if (RorL == "L") {
            RR = RorLMargin + KD - 20;
        }

        Html += "<div id=\"clo_" + ID + "\" style=\"z-index: " + (Zindex + 1) + "; position:fixed;" + RL + ": 0px;margin-" + RL + ":" + RR + "px; " + TB + ": " + BB + "px; \" >" +
        "<img src=\"" + CloPic + "\" style=\"cursor:pointer;\"/></div>";
    }

    $(Html).appendTo("body");

    $("#clo_" + ID).click(function () {

        $("#" + ID).remove();
        $(this).remove();
    });

}