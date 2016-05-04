//获取显示窗口的宽度
function getWindowWidth() {
    return $(window).width();
}
//获取显示窗口的高度
function getWindowHeiht() {
    return $(window).height();
}

//获取整个页面文档的宽度
function getDocumentWidth() {
    return $(document).width();
    // return(document.body.scrollWidth);  //或者
}
//获取整个页面文档的高度
function getDocumentHeiht() {
    return $(document).height();
    // return(document.body.scrollHeight);  //或者
}




//获取显示窗口的相对于整个页面左上角的位置纵坐标
function getWindowScrollTop() {
    if ($(document.documentElement).scrollTop() >= $(document.body).scrollTop()) {
        return $(document.documentElement).scrollTop();
    }
    else {
        return $(document.body).scrollTop();
    }
}

//获取显示窗口的相对于整个页面左上角的位置横坐标
function getWindowScrollLeft() {
    if ($(document.documentElement).scrollLeft() >= $(document.body).scrollLeft()) {
        return $(document.documentElement).scrollLeft();
    }
    else {
        return $(document.body).scrollLeft();
    }
}

//获取显示dom对象的相对于整个页面左上角的位置纵坐标
function GetObjectScrollTop(object) {
    return $(object).offset().top;

    //    if (document.all == undefined) {  //非ie，火狐等
    //        return $(object).offset().top;
    //    }
    //    else {
    //        return getWindowScrollTop() + $(object).offset().top;  //getWindowScrollTop()函数是自定义函数，见上面
    //    }
}

//获取显示dom对象的相对于整个页面左上角的位置横坐标
function GetObjectScrollLeft(object) {
    return $(object).offset().left;
    //    if (document.all == undefined) {  //非ie，火狐等
    //        return $(object).offset().left;
    //    }
    //    else {
    //        return getWindowScrollLeft() + $(object).offset().left;
    //        // getWindowScrollLeft()函数是自定义函数，见上面
    //    }
}




//获取dom对象相对于窗口的位置纵坐标
function GetObjectWindowTop(object) {
    return GetObjectScrollTop(object) - getWindowScrollTop();
}

//获取dom对象相对于窗口的位置横坐标
function GetObjectWindowLeft(object) {
    return GetObjectScrollLeft(object) - getWindowScrollLeft();
}



//获取dom对象相对于另一个dom对象左上角的位置纵坐标(object1相对于object2)
function GetObjectRelativeTop(object1, object2) {
    return GetObjectScrollTop(object1) - GetObjectScrollTop(object2);
}

///获取dom对象相对于另一个dom对象左上角的位置横坐标(object1相对于object2)
function GetObjectRelativeLeft(object1, object2) {
    return GetObjectScrollLeft(object1) - GetObjectScrollLeft(object2);
}



//设置dom对象的位置
function SetObjectPositon(object, Postion, Left, Top) {
    object.css("position", Postion);
    object.css("left", Left);
    object.css("top", Top);
}



//记录鼠标位置
document.onmousemove = mouseMove;
var mx = 0, my = 0;
function mouseMove(ev) { Ev = ev || window.event; var mousePos = mouseCoords(Ev); mx = mousePos.x; my = mousePos.y; }
function mouseCoords(ev) {
    if (ev.pageX || ev.pageY) { return { x: ev.pageX, y: ev.pageY }; }
    return { x: ev.clientX, y: ev.clientY };
}

//获取当前鼠标横坐标
function getcusorX() {
    return mx;
}
//获取当前鼠标纵坐标
function getcusorY() {
    return my;
}

//获取当前鼠标横坐标()
function getscrollcusorX() {
    return mx + $(document).scrollLeft();
}
//获取当前鼠标纵坐标
function getscrollcusorY() {
    return my + $(document).scrollTop();
}



//鼠标是否在某个对象上
function isMouseOnObject(object) {

    var objymin = GetObjectScrollTop(object);
    var objxmin = GetObjectScrollLeft(object);
    var objwidth = $(object).width();
    var objheigh = $(object).height();

    //alert(objymin + "," + objxmin);

    var objymax = parseInt(objymin) + parseInt(objheigh);
    var objxmax = parseInt(objxmin) + parseInt(objwidth);


    //alert(objxmin + "," + objxmax + "|" + objymin + "," + objymax);

    //alert(mx + "," + my);

    //alert(mx + "," + objxmin + "," + objxmax);
    //alert(my + "," + objymin + "," + objymax);


    if (mx >= objxmin && mx <= objxmax && my >= objymin && my <= objymax) {
        return true;
    }
    else {
        return false;
    }
}


//坐标是否在某个对象上
function isMouseXYOnObject(object, X, Y) {

    var objymin = GetObjectScrollTop(object);
    var objxmin = GetObjectScrollLeft(object);
    var objwidth = $(object).width();
    var objheigh = $(object).height();

    //alert(objymin + "," + objxmin);

    var objymax = parseInt(objymin) + parseInt(objheigh);
    var objxmax = parseInt(objxmin) + parseInt(objwidth);


    //alert(objxmin + "," + objxmax + "|" + objymin + "," + objymax);

    //alert(mx + "," + my);

    //alert(mx + "," + objxmin + "," + objxmax);
    //alert(my + "," + objymin + "," + objymax);


    if (X >= objxmin && X <= objxmax && Y >= objymin && Y <= objymax) {
        return true;
    }
    else {
        return false;
    }
}

