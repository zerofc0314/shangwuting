
//当前页
var current = $(".txtIndex").val();
var intcurrent = parseInt(current);
//总页数
var pgcount = $("#lbCount").text();
var intpgcount = parseInt(pgcount);

//三个页码控件
var pg1 = $("#num1");
var pg2 = $("#num2");
var pg3 = $("#num3");
//上、下页，第一、最后页控件
var lbtnFirst = $("#lbtnFirst");
var lbtnNext = $("#lbtnNext");
var lbtnLast = $("#lbtnLast");
var lbtnbefore = $("#lbtnbefore");

lbtnFirst.attr("disabled", "disabled");
lbtnNext.attr("disabled", "disabled");
lbtnLast.attr("disabled", "disabled");
lbtnbefore.attr("disabled", "disabled");

if (intcurrent == 1) {
    pg1.html(current);
    pg1.css("color", "red");
    pg2.html(intcurrent + 1);
    pg3.html(intcurrent + 2);
}
else if (pgcount == current && pgcount >= 3) {
    pg1.html(intcurrent - 2);
    pg2.html(intcurrent - 1);
    pg3.html(current);
    pg3.css("color", "red");
}
else {
    pg1.html(intcurrent - 1);
    pg2.html(current);
    pg2.css("color", "red");
    pg3.html(intcurrent + 1);
}

if (intpgcount == 0) {
    lbtnFirst.hide();
    lbtnNext.hide();
    lbtnLast.hide();
    lbtnbefore.hide();
    pg2.hide();
    pg3.hide();
    pg1.hide();
}

if (intpgcount == 1) {
    if (intcurrent == 1) {
        lbtnFirst.hide();
        lbtnbefore.hide();
        lbtnNext.hide();
        lbtnLast.hide();
        pg1.hide();
        pg2.hide();
        pg3.hide();
    }
}
else if (intpgcount == 2) {
    if (intcurrent == 1) {
        lbtnLast.attr("disabled", "");
        lbtnNext.attr("disabled", "");
        pg3.hide();
    }
    else if (intcurrent == 2) {
        lbtnFirst.attr("disabled", "");
        lbtnbefore.attr("disabled", "");
        pg3.hide();
    }
    else if (intcurrent == 3) {
        lbtnFirst.attr("disabled", "");
        lbtnbefore.attr("disabled", "");
    }
}
else if (intpgcount >= 3) {
    if (intcurrent == 1) {
        lbtnLast.removeAttr("disabled");
        lbtnNext.attr("disabled", "");
        pg2.attr("disabled", "");
        pg3.attr("disabled", "");
    }
    else if (intcurrent == 2) {
        lbtnFirst.attr("disabled", "");
        lbtnbefore.attr("disabled", "");
        lbtnLast.attr("disabled", "");
        lbtnNext.attr("disabled", "");
    }
    else if (intcurrent < intpgcount) {
        lbtnFirst.attr("disabled", "");
        lbtnbefore.attr("disabled", "");
        lbtnLast.attr("disabled", "");
        lbtnNext.attr("disabled", "");
    }
    else {
        lbtnFirst.attr("disabled", "");
        lbtnbefore.attr("disabled", "");
    }
}





//上部分为分页控件初始化
//---------------------------------------------------------------------------
//下部分为操作处理



var path = $(".txtPath").val();
$(".btnGo").click(function () {
    var intcurrent = 0;
    try {
        intcurrent = parseInt($(".txtIndex").val());
    }
    catch (e) {
    }
    if (intcurrent == 0 || intcurrent > parseInt($(".lbCount").text())) {
        alert("对不起，你请求的页不存在");
        return false;
    }
    window.location = path + $(".txtIndex").val();
    return false;
});

$(".numym").click(function () {
    if ($(this).attr("disabled")) {
    }
    else {
        window.location = path + $(this).text();
    }
    return false;
});


$(".lbtnFirst").click(function () {
    if ($(this).attr("disabled")) {
    }
    else {
        window.location = path + "1";
    }
    return false;
});

$(".lbtnbefore").click(function () {
    if ($(this).attr("disabled")) {
    }
    else {
        window.location = path + (intcurrent - 1);
    }
    return false;
});
$(".lbtnNext").click(function () {
    if ($(this).attr("disabled")) {
    }
    else {
        window.location = path + (intcurrent + 1);
    }
    return false;
});

$(".lbtnLast").click(function () {
    if ($(this).attr("disabled")) {
    }
    else {
        window.location = path + $(".lbCount").text();
    }
    return false;
});
        
