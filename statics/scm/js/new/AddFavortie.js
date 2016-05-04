//加入收藏
function addBookmark(title, url) {
    try {
        window.external.addFavorite(url, title);
    }
    catch (e) {
        try {
            window.sidebar.addPanel(title, url, "");
        }
        catch (e) {
            alert("加入收藏失败，请使用Ctrl+D进行添加");
        }
    }
}
// 设为首页
function SetHome(obj, vrl) {
    try {
        obj.style.behavior = 'url(#default#homepage)';
        obj.setHomePage(vrl);
    } catch (e) {
        if (window.netscape) {
            try {
                netscape.security.PrivilegeManager
                netscape.enablePrivilege("UniversalXPConnect");
            } catch (e) {
                trace.error("您使用的FireFox浏览器安全设置过高,以至于影响程序的正常响应！\n请在浏览器地址栏输入'about:config'并回车\n然后将'signed.applets.codebase_principal_support'设置为'true',双击即可。");
            }
            var prefs = Components.classes['@mozilla.org/preferences-service;1']
            prefs.getService(Components.interfaces.nsIPrefBranch);
            prefs.setCharPref('browser.startup.homepage', vrl);
        } else {
            alert('您的浏览器(google chrome)不支持自动自动设置首页, 请使用浏览器菜单手动设置!Ctrl+D进行添加');
        }
    }
} 