
var swfpath = "./statics/js/new/picviewer.swf";
var swf_height = pic_height + text_height;
texts = texts.replace("%", "");
pics = escape(pics);
links = escape(links);
document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="' + pic_width + '" height="' + swf_height + '">');
document.write('<param name="allowScriptAccess" value="sameDomain"><param name="movie" value="' + swfpath + '"><param name="quality" value="high"><param name="bgcolor" value="#E1E7ED">');                                 //设置下面的背景颜色                                 
document.write('<param name="menu" value="false"><param name=wmode value="opaque">');
document.write('<param name="FlashVars" value="pics=' + pics + '&links=' + links + '&borderwidth=' + pic_width + '&borderheight=' + pic_height + '&textheight=' + text_height + '&texts=' + texts + '">');
document.write('<embed src="' + swfpath + '" wmode="opaque" FlashVars="pics=' + pics + '&links=' + links + '&borderwidth=' + pic_width + '&borderheight=' + pic_height + '&textheight=' + text_height + '&texts=' + texts + '" menu="false" bgcolor="#ffffff" quality="high" width="' + pic_width + '" height="' + pic_height + '" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />');
document.write('</object>');



