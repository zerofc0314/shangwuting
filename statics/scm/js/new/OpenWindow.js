function getParas(curwin, paraName) {
    paraName = paraName.toLowerCase();
    var cururl = curwin.location.toString();
    var url = cururl.toLowerCase();

    if ((url.indexOf("&sn=") > 0 || url.indexOf("?sn=") > 0) && (url.indexOf("&" + paraName + "=") > 0 || url.indexOf("?" + paraName + "=") > 0)) {
    }
    else {
        return "";
    }

    var paraindex = cururl.indexOf("?");
    var paras = cururl.substring(paraindex + 1, url.length);

    var para = paras.split("&");
    var jsonstr = "{\"paras\":{";
    for (var i = 0; i < para.length; i++) {
        var kv = para[i].split("=");
        jsonstr += "\"" + kv[0].toLowerCase() + "\":[\"" + kv[1] + "\"],";
    }
    jsonstr = jsonstr.substring(0, jsonstr.length - 1);
    jsonstr += "}}";
    var json = eval("(" + jsonstr + ")");
    return json.paras[paraName].toString();

}


var curSetValueWindow = null;  //选择时准备设置返回值的窗口
var curReWindow = null;  //关闭div时准备刷新的窗口
var framei = 0;  //当前div个数
//创建DIV
//curwin:当前要被刷新的窗口，用于设置弹出div关闭后要刷新的窗口。用于弹出编辑页面
//url：弹出的页面的URL
//title：弹出的页面的标题
//width：弹出页面的宽
//height：弹出页面的高
//cursetvalwin：当前要设置返回值的窗口。用于弹出选择
//left：弹出页面距离页面左侧的位置
//top：弹出页面距离页面顶部的位置
function createDIV(curwin, url, title, width, height, cursetvalwin, left, top) {
    framei++;
    if (curwin != null) {  //对于选择那些弹出，不需要重新设置当前
        curReWindow = curwin;
    }
    if (cursetvalwin != null && cursetvalwin != undefined) {
        curSetValueWindow = cursetvalwin;
        if (curReWindow == null) {
            curReWindow = cursetvalwin;
        }
        else {
            try {
                curReWindow.location
            }
            catch (ee) {
                curReWindow = cursetvalwin;
            }
        }
    }




    if (width == null || width == "" || width == undefined || width > $(window).width() - 60) {
        width = $(window).width() - 80;
    }
    if (height == null || height == "" || height == undefined || height > $(window).height() - 60) {
        height = $(window).height() - 90;
    }

    //        var winwidth = getWindowScrollLeft() + $(window).width();
    //        var winheight = getWindowScrollTop() + $(window).height();

    var winwidth = $(window).width();
    var winheight = $(window).height();


    if (winwidth < width) {
        winwidth = width;
    }
    if (winheight < height) {
        winheight = height;
    }


    if (left == null || left == "" || left == undefined) {
        left = getWindowScrollLeft() + (winwidth - width) / 2 + framei * 5;
    }
    if (top == null || top == "" || top == undefined) {
        top = getWindowScrollTop() + (winheight - height) / 2 + framei * 5;
    }



    if (title == null || title == "" || title == undefined) {
        title = '';
    }

    var tempurl = url.toLowerCase();
    if (tempurl.indexOf("&sn=") > 0 || tempurl.indexOf("?sn=") > 0) {
    }
    else {
        if (url.indexOf("?") > 0) {
            url += "&sn=" + getParas(curReWindow, "sn");
        }
        else {
            url += "?sn=" + getParas(curReWindow, "sn");
        }
    }
    if (tempurl.indexOf("&iswzlm=") > 0 || tempurl.indexOf("?iswzlm=") > 0) {
    }
    else {
        if (url.indexOf("?") > 0) {
            url += "&iswzlm=" + getParas(curReWindow, "iswzlm");
        }
        else {
            url += "?iswzlm=" + getParas(curReWindow, "iswzlm");

        }
    }
    if (tempurl.indexOf("&isbd=") > 0 || tempurl.indexOf("?isbd=") > 0) {
    }
    else {
        if (url.indexOf("?") > 0) {
            url += "&isbd=" + getParas(curReWindow, "isbd");
        }
        else {
            url += "?isbd=" + getParas(curReWindow, "isbd");

        }
    }
    addDiv(url, title, width, height, left, top);
    //$(".dvUEdit_" + framei).show(500);
}

//创建DIV
function addDiv(url, title, width, height, left, top) {

    var id = framei;
    var div = "";
    div += "<div class=\"frame_" + id + "\" style=\"width:" + (getDocumentWidth() - 18) + "px; height:" + (getDocumentHeiht()) + "px; position:absolute; left:0px; top:0px;z-index:" + (100 + id * 2) + ";background:#9E9E9E;filter:alpha(opacity=50);\">";
    div += "<iframe frameborder=\"0\" scrolling=\"no\" width=\"100%\" height=\"100%\" ></iframe></div>";
    //            div += "</div>";
    //          div += "<div class=\"dvUEdit_" + id + "\" style=\"width: " + width + "px; height: " + height + "px; border: 3px solid #E0F0FC;position: absolute; background:#fff; overflow: hidden; display:none; text-align:center;z-index:" + (101 + id * 2) + ";\">";

    div += "<div class=\"dvUEdit_" + id + "\" style=\"left:" + left + "px;top:" + top + "px;width: " + width + "px; height: " + height + "px; border: 5px solid #B0CEE8;border-top: 0px solid #B0CEE8;position: absolute; background:#fff; overflow: hidden; text-align:center;z-index:" + (101 + id * 2) + ";\">";
    div += "<div class=\"login_line\" style=\"background: #B0CEE8; display: inline-block; width: 100%;height: 28px;\">";
    div += "<span class=\"login_head\" style=\"font-size: 14px; color:white; font-weight: bold; display: block;float: left; height: 28px; line-height: 28px; width: 200px; text-align:left; text-indent:20px;\">" + title + "</span>";
    div += "<span id=\"close_" + id + "\" class=\"login_close\" style=\"background: url(/Themes/Default/img/close.gif) no-repeat 8px 8px;cursor: pointer; width: 28px; height: 28px; display: block; float: right;\"></span></div>";
    div += "<iframe id=\"iframe_" + id + "\" class=\"iframe_" + id + "\"  scrolling=\"auto\"  frameborder=\"0\" src=\"" + url + "\"  width=\"100%\"  height=\"" + (height - 33) + "\"></iframe></div>";
    $("body").append($(div));
    $("#close_" + id).click(function () {
        hiddiv();
    });
}

function hiddiv()//关闭窗口
{
    $("#iframe_" + framei).remove();
    $(".frame_" + framei).remove();
    $(".dvUEdit_" + framei).remove();
    framei--;
}

//关闭窗口数据并刷新上级窗口
function hiddivAndreParent() {
    if (curReWindow != undefined && curReWindow != null) {
        hiddiv();
        if (curReWindow.PostBackRefresh != undefined && curReWindow.PostBackRefresh != null) {
            curReWindow.PostBackRefresh();
        }
        else {

            curReWindow.location = trimright(curReWindow.location.toString(), "#");
            
        }
    }
}

//关闭窗口数据并刷新上级窗口，同时清除drS_TABLE的viewstate
function hiddivAndreParentRViewState() {
    if (curReWindow != undefined && curReWindow != null) {
        hiddiv();
        if (curReWindow.PostBackRefreshRViewState != undefined && curReWindow.PostBackRefreshRViewState != null) {
            curReWindow.PostBackRefreshRViewState();
        }
        else {

            curReWindow.location = trimright(curReWindow.location.toString(),"#");
        }
    }
}





//保存数据并关闭窗口,同时给上级页面执行的控件赋值
function setValueAndhiddiv(controls, value, button) {
    hiddiv();

    curSetValueWindow.setValue(controls, value, button); //调用该页面上的方法给控件赋值，最后模拟单击button
}

//保存数据并关闭窗口,同时给上级页面指定的列表或下拉控件添加选项
function addlistboxOptionAndhiddiv(control, value, button) {
    hiddiv();

    curSetValueWindow.addlistboxOption(control, value, button); //调用该页面上的方法给控件赋值，最后模拟单击button
}

//保存数据并关闭窗口,同时给上级页面执行的控件赋值,在原有值基础之上追加
function appendValueAndhiddiv(controls, value, button, fgf) {
    hiddiv();

    curSetValueWindow.appendValue(controls, value, button, fgf); //调用该页面上的方法给控件赋值，最后模拟单击button
}




function trimright(oldstr, chr) {
    if (oldstr.substring(oldstr.length - 1, oldstr.length) == chr) {
        oldstr = oldstr.substring(0, oldstr.length - 1);
        return trimright(oldstr, chr);
    }
    else {
        return oldstr;
    }
}