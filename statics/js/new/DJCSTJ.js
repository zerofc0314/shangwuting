//更新点击次数
function GXDJCS(TableName, PKID)
{       
    GXCYRZ(TableName,PKID,'DJCS');    
}
//更新查阅日志
function GXCYRZ(TableName, PKID, Field)
 {
    $.ajax({
        type: "GET",
        url: "/AjaxHandler/DJCSTJ.ashx?&TableName=" + TableName + "&PKID=" + PKID + "&" + "&Field=" + Field + "&" + Math.random(),
        dataType: "html",
        beforeSend: function (XMLHttpRequest) {

        },
        success: function (Msg, textStatus) {

        },
        complete: function (XMLHttpRequest, textStatus) {
        },
        error: function () {

        }
    });
}