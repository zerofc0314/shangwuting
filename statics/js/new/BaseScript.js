

//*******************************************************************
//功能说明：折叠效果
//创建日期：2009-6-18
//参数说明：@param1: tbodyID 需要隐藏的最外层容器的ID
//         ：@param2: imgID图片发生变化时候图片的ID，比如图片“+”图片“-”
//*******************************************************************

function SwitchOpenClose(tbodyID, imgID) {
    var objTobdy = document.getElementById(tbodyID);
    var objTdImg = document.getElementById(imgID);
    if (objTobdy.style.display == "none") {
        objTobdy.style.display = "";
        objTdImg.src = "/Themes/Default/img/Switch/Close.gif";
        objTdImg.alt = "单击收起";
    }
    else {
        objTobdy.style.display = "none";
        objTdImg.src = "/Themes/Default/img/Switch/Open.gif";
        objTdImg.alt = "单击展开";
    }
}