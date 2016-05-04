function getpara(paraName) {
    var cururl = window.location.toString();
    var url = cururl.toLowerCase();

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

    //存在该参数
    if (jsonstr.indexOf("\""+paraName+"\"") > -1) {
        return json.paras[paraName].toString();
    }
    else {
        return "";
    }
}


//解码后的参数
function getparadecode(key) {
    return decodeURIComponent(getpara(key));
}