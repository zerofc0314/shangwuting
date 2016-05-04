function getParas(curwin, paraName) {
    var cururl = curwin.location.toString();
    var url = cururl.toLowerCase();
    //alert(url);
    if (url.indexOf("&sn=") > 0 || url.indexOf("?sn=") > 0) {
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
        jsonstr += "\"" + kv[0] + "\":[\"" + kv[1] + "\"],";
    }
    jsonstr = jsonstr.substring(0, jsonstr.length - 1);
    jsonstr += "}}";
    var json = eval("(" + jsonstr + ")");
    
    return json.paras[paraName].toString();
}