<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=7" />
        <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
        <meta name="description" content="<?php echo $SEO['description'];?>" />
        <meta name="keywords" content="<?php echo $SEO['keyword'];?>" />
        
        <?php include template("content","header_inclub"); ?>
         <link href="<?php echo CSS_PATH;?>new/law.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
         <?php include template("content","header"); ?>
          </div>
          <div class="mid" style="margin:0 auto;min-height:545px;">
             <div class="ui_layout_right list_width">
                 <div class="site">
                     <div class="site_img">
                     </div>
                     <div class="site_write">
                         您的位置：<a href="<?php echo siteurl($siteid);?>">频道首页</a> >

                         <a target="_blank" href="/LMNR/LMNRList.aspx?LMID=810">
                            <?php echo catpos($catid);?> </a> 
                     </div>
                     <input name="ctl00$ContentPlaceHolder1$dlyhid" type="text" id="ctl00_ContentPlaceHolder1_dlyhid" style="display: none;" class="dlyhid" value="-1" />
                     <div class="clear"></div>
                 </div>
                 
                 <div class="ui_list_zcfg">
                   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=83e86dbe8e634be99f241427bdc4f45f&action=lists&catid=%24catid&num=20&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 20;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                     <ul class="LIST_cont_law">
                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                         <li><span><?php echo date('Y-m-d H:i:s',$r[inputtime]);?></span>
                             <a href="<?php echo $r['url'];?>" target="_blank"<?php echo title_style($r[style]);?>><img src="<?php echo IMG_PATH;?>new1/icon_1_07.gif" /><?php echo $r['title'];?></a>
                         </li>
                        <?php $n++;}unset($n); ?>
                     </ul>
                   
                   
                     <div class="link_more">
                         <?php echo $pages;?>
                         <!--
                         <div class="page" style="text-align:center;height:25px; line-height:25px; text-indent:10px;">共 <span class="a05">71</span> 条信息&nbsp;&nbsp;&nbsp;&nbsp;</div>
                         <div class="pagenum">
                             <a id="lbtnFirst" class="lbtnFirst" disabled="" href="#"  style="border: 1px solid #C4C4C4;color: #00349A;display: inline;float: left;font-size: 12px;font-weight: 500;line-height: 24px;margin-right: 5px;padding:0 2px">首页
                             </a>
                             <a id="lbtnbefore" class="lbtnbefore" disabled="" href="#"  style="border: 1px solid #C4C4C4;color: #00349A;display: inline;float: left;font-size: 12px;font-weight: 500;line-height: 24px;margin-right: 5px;padding:0 2px;">上一页
                             </a>
                             <a id="num1" class="numym" href="#" style="border: 1px solid #C4C4C4;color: #00349A;display: inline;float: left;font-size: 12px;font-weight: 500;line-height: 24px;margin-right: 5px;padding:0 5px;">1
                             </a>
                             <a id="num2" class="numym" href="#" style="border: 1px solid #C4C4C4;color: #00349A;display: inline;float: left;font-size: 12px;font-weight: 500;line-height: 24px;margin-right: 5px;padding:0 5px;">2
                             </a>
                             <a id="num3" class="numym" href="#" style="border: 1px solid #C4C4C4;color: #00349A;display: inline;float: left;font-size: 12px;font-weight: 500;line-height: 24px;margin-right: 5px;padding:0 5px;">3
                             </a>
                             <a id="lbtnNext" class="lbtnNext" href="#" style="border: 1px solid #C4C4C4;color: #00349A;display: inline;float: left;font-size: 12px;font-weight: 500;line-height: 24px;margin-right: 5px;padding:0 2px;">下一页
                             </a>
                             <a id="lbtnLast" class="lbtnLast" href="#" style="border: 1px solid #C4C4C4;color: #00349A;display: inline;float: left;font-size: 12px;font-weight: 500;line-height: 24px;margin-right: 5px;padding:0 2px;">尾页
                             </a>
                             <span class="normal">共【<span id="lbCount" class="a05 lbCount">4</span>页】</span>
                             <span class="normal">当前第 <input style="width: 35px; height: 20px;" id="txtIndex" class="txtIndex inputSZ" value="1" type="text">页
                                 <input id="tbxCurrent" value="1" type="hidden">
                                 <input style="height: 23px; padding-bottom: 2px; padding-left:10px; padding-right:10px; margin-left:5px" class="btnGo" value="Go" type="button" >
                             </span>
                             <input id="txtPath" class="txtPath" value="http://www.tpsp.com.cn:80/LMNR/LMNRList.aspx?LMID=811&pageindex=" type="hidden">
                         </div>
                         <script src="<?php echo JS_PATH;?>new/QTPager.js" type="text/javascript"></script>
                         -->
                     </div>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                 </div>
             </div>
             <!--以上是列表-->

             <div class="ui_layout_left">
                 <div class="ui_lay_zccx">
                     <div class="ui_zccx_nav">
                     </div>
                     <div class="ui_lay_cont">
                         <div class="ui_check">
                         </div>
                         <div class="formcont">
                             <div>
                                 <label for="title">
                                     标题：</label><input name="ctl00$ContentPlaceHolder1$lmbt" type="text" id="ctl00_ContentPlaceHolder1_lmbt" class="lmbt" /></div>
                             <div>
                                 <label for="title">
                                     关键字：</label><input name="ctl00$ContentPlaceHolder1$gjz" type="text" id="ctl00_ContentPlaceHolder1_gjz" class="gjz" /></div>
                             <div class="btn">
                                 <input class="btnzccx_2" type="button" /></div>
                         </div>
                     </div>
                     <script type="text/javascript">
                         $(".btnzccx_2").click(function () {
                             window.location = "LMNRList.aspx?LMID=811&BT=" + encodeURIComponent($(".lmbt").val()) + "&SSNR=" + encodeURIComponent($(".gjz").val());
                         });
                         $(document).keydown(function (e) {
                             var ev = document.all ? window.event : e;
                             if (ev.keyCode == 13) {
                                 window.location = "LMNRList.aspx?LMID=811&BT=" + encodeURIComponent($(".lmbt").val()) + "&SSNR=" + encodeURIComponent($(".gjz").val());
                             }
                         });
                         //先判断是否登录 再进行跳转报名
                         $(".zxxxbm").click(function () {
                             if ($(".dlyhid").val() == "-1" || $(".dlyhid").val() == "") {
                                 var Button = $(this).attr("id");
                                 var yhid = $(".dlyhid").attr("id");
                                 window.top.createDIV(window, "/Themes/cdweb/htm/Login.aspx?Controls=" + yhid + "&Button=" + Button, "用户登录", 450, 265, window, "", "", true);
                                 return false;
                             } else {
                                 window.location = "/LMNR/ZXBM.aspx?TableName=WZ_LMNR&PKID=" + $(this).attr("zxxxbmid") + "&YHID=" + $(".dlyhid").val();
                             }
                             return false;
                         });
                     </script>
                 </div>
                 <!--以上是政策查询-->
                 <div class="ui_import">
                 </div>
                 <div class="ui_import ui_import_ie7">
                 </div>

             </div>
             <div class="clear">
             </div>
         </div>

         <?php include template("content","footer"); ?>
    </body>
</html>
