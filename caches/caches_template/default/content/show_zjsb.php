<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=7" />
        <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
        <meta name="description" content="<?php echo $SEO['description'];?>" />
        <meta name="keywords" content="<?php echo $SEO['keyword'];?>" />
        <link href="<?php echo CSS_PATH;?>new/public.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo JS_PATH;?>/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo JS_PATH;?>new/WdatePicker.js" type="text/javascript"></script>
        <script src="<?php echo JS_PATH;?>new/PostionHelper.js" type="text/javascript"></script>
        <script src="<?php echo JS_PATH;?>new/StringHelper.js" type="text/javascript"></script>
        <script src="<?php echo JS_PATH;?>new/getURLparameters.js" type="text/javascript"></script>
        <script src="<?php echo JS_PATH;?>new/OpenWindow.js" type="text/javascript"></script>
        <script src="<?php echo JS_PATH;?>new/FormCheck.js" type="text/javascript"></script>
        <script src="<?php echo JS_PATH;?>new/CDPTPF.js" type="text/javascript"></script>
        <script src="<?php echo JS_PATH;?>new/picScrollByStep.js" type="text/javascript"></script>
        <link href="<?php echo CSS_PATH;?>new/law.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo JS_PATH;?>new/DJCSTJ.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo JS_PATH;?>cookie.js"></script>
        <script type="text/javascript" src="<?php echo JS_PATH;?>search_common.js"></script>
        <style>
            .add_mid{width:994px;margin:0 auto;}
        </style>
    </head>
    <body>
        <?php include template("content","header"); ?>
       </div>
       <div class="mid add_mid" style="margin-bottom:15px;">
           <div class="ui_layout_right list_width">
               <div class="site">
                   <div class="site_img">
                   </div>
                   <div class="site_write">
                     您的位置：<a href="<?php echo siteurl($siteid);?>">频道首页</a> >> 
                           <?php echo catpos($catid);?>
                   </div>
                   <div class="clear">
                   </div>
               </div>
               <div class="ui_list_zcfg">
                   <div class="CONT_con">
                       <h5>
                           <?php echo $title;?>
                       </h5>
                       <div class="CONT_info">
                           字体【<span style="cursor: pointer" size="16">大</span>&nbsp;<span
                               style="cursor: pointer" size="14">中</span>&nbsp;<span style="cursor: pointer" size="12">小</span>】
                           背景颜色:&nbsp;&nbsp;<img src="<?php echo IMG_PATH;?>new1/new-c-1.jpg" num="0" />
                           &nbsp;&nbsp;&nbsp;<img src="<?php echo IMG_PATH;?>new1/new-c-2.jpg" num="1" />
                           &nbsp;&nbsp;&nbsp;<img src="<?php echo IMG_PATH;?>new1/new-c-3.jpg" num="2" />
                           &nbsp;&nbsp;&nbsp;<img src="<?php echo IMG_PATH;?>new1/new-c-4.jpg" num="3" />
                           &nbsp;&nbsp;&nbsp;<img src="<?php echo IMG_PATH;?>new1/new-c-5.jpg" num="4" />
                           <a target="_blank" onclick="preview()">[打印内容]</a>
                           </br>
                           发布日期：<span><?php echo $inputtime;?></span>&nbsp;来源：<span><?php echo $copyfrom;?></span>
                       </div>
                       <!--startprint-->
                       <div class="CONT_p lmnrdetail" style="padding-left:15px;" >
                           <?php echo $content;?>
                        
                       </div>
                       <!--endprint-->
                   </div>
               </div>
               <div style="margin-left: 0px; width:706px;">
                   <script src="<?php echo JS_PATH;?>new/DJCSTJ.js" type="text/javascript"></script>
                   <script src="<?php echo JS_PATH;?>new/WdatePicker.js" type="text/javascript"></script>
                   <script src="<?php echo JS_PATH;?>new/FormCheck.js" type="text/javascript"></script>
                   <script src="<?php echo JS_PATH;?>new/PostionHelper.js" type="text/javascript"></script>
                   <script src="<?php echo JS_PATH;?>new/StringHelper.js" type="text/javascript"></script>
                   <script src="<?php echo JS_PATH;?>new/getURLparameters.js" type="text/javascript"></script>
                   <script src="<?php echo JS_PATH;?>new/OpenWindow.js" type="text/javascript"></script>
                   <style type="text/css">
                      /* .qwfb_pl{width:992px;margin-top:10px;margin-bottom:10px;}*/
                   .qwfb_pl_person{float:left;width:100%;background:#ededed;margin-left:8px;_margin-left:4px;}
                   .CONT_pl{width:99.4%;background:#ededed;padding:1px 1px;border:1px solid #c9c9c9;}
                   .plk{margin:auto;width:98%;height:119px;margin-top:10px;}
                   .plk textarea{width:97%;height:109px;padding:5px;}
                   .pl_input{margin:auto;width:98%;margin-top:10px;margin-bottom:10px;}
                   .pl_input input{width:160px;height:25px;line-height:25px;color:#4c4c4c;text-indent:5px;}
                   .pl_input .pl_btn img{vertical-align:middle;}
                   .pl_input .pl_btn{float:right;}
                   .detail_pl{margin:auto;width:99.4%;background:#fff;border:1px solid #c9c9c9;padding:1px 1px;border-top:none;}
                   .detail_pl_nav{width:99.4%;height:56px;background:url(../../images/new1/CONT_new_pl_11.gif) 0px 0px repeat-x;}
                   .new_pl{float:left;width:135px;height:56px;border-right:1px solid #c9c9c9;text-align:center;line-height:56px;font-size:14px;}
                   .new_pl_check{width:135px;height:56px;background:#fff;}
                   .detail_pl_nav span{float:right;margin-right:10px;line-height:56px;}
                   .detail_pl_cont{margin:auto;width:97%;margin-top:10px; }
                   .pl_detail{margin:auto;width:97%;margin-bottom:10px;}
                   .pl_detail span{float:left;}
                   .person_info{float:left;margin-left:10px;width:97%;border:1px solid red;}
                   .person_info p{text-indent:2em;line-height:20px;}
                   .div_dashed{margin:auto;width:97%;height:1px;margin-top:5px;margin-bottom:10px;border-bottom:1px dashed #ccc;}
                   .info_pl{height:25px;line-height:25px;float:right;}
                   .info_pl a{color:#ff0000;margin-right:10px;}
                   </style>
                   <div style="clear:both; height:0px;"></div>
                   
                   <div style="padding-left: 30px; margin-bottom: 8px; margin-top:5px; ">
                       <!--分享的在线插件-->
                       <div class="bshare-custom">
                           <a title="分享到" href="http://www.bShare.cn/" id="bshare-shareto" class="bshare-more">分享到</a>
                           <a title="分享到QQ空间" class="bshare-qzone">QQ空间</a>
                           <a title="分享到新浪微博" class="bshare-sinaminiblog">新浪微博</a>
                           <a title="分享到人人网" class="bshare-renren">人人网</a>
                           <a title="分享到腾讯微博" class="bshare-qqmb">腾讯微博</a>
                           <a title="分享到豆瓣" class="bshare-douban">豆瓣</a>
                           <a title="更多平台" class="bshare-more bshare-more-icon more-style-addthis"></a>
                           <span class="BSHARE_COUNT bshare-share-count">0</span>
                       </div>
                       <script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/buttonLite.js#style=-1&amp;uuid=&amp;pophcol=2&amp;lang=zh"></script>
                       <script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC0.js"></script>
                   </div>
                   
                   <div class="bk10"></div>
                   
                   <?php if($allow_comment && module_exists('comment')) { ?>
                   <iframe src="<?php echo APP_PATH;?>index.php?m=comment&c=index&a=init&commentid=<?php echo id_encode("content_$catid",$id,$siteid);?>&iframe=1" width="100%" height="100%" id="comment_iframe" frameborder="0" scrolling="no"></iframe>
                   <?php } ?>
                   
               </div>
           </div>
           
           <!--以上是内容页的内容-->
           <div class="ui_layout_left">
               <div class="ui_lay_zccx">
                   <div class="ui_zccx_nav"> </div>
          
                   <div class="ui_lay_cont sr_frm">
                       <div class="ui_check"></div>
                       
                       <form method="get" name="search">
                          <input type="hidden" name="m" value="search"/>
			  <input type="hidden" name="c" value="index"/>
			  <input type="hidden" name="a" value="init"/>
			  <input type="hidden" name="typeid" value="1" id="typeid"/>
			  <input type="hidden" name="siteid" value="1" id="siteid"/>

                       <div class="formcont sr_frm_box">
                           <div class="sr_frmipt">
                               <label for="title">
                                   标题：</label><input type="text" height="30px;" class="gjz ipt" name="q" id="q"/> 
                           </div>
                           <div class="sr_frmipt">
                               <label for="title">
                                   关键字：</label><input type="text" height="30px;" class="gjz ipt" name="keywords" id="q"/> 
                           </div>
                           
                           <div class="btn">
                               <input class="ss_btn btnzccx_2" type="submit" value=""/>
                           </div>
                       </div> 
                     </form>
                   </div>
                   
                   <?php if($setting['suggestenable']) { ?>
                    <script type="text/javascript" src="<?php echo JS_PATH;?>jquery.suggest.js"></script>
                    <script type="text/javascript" src="<?php echo JS_PATH;?>search_suggest.js"></script>
                    <?php } ?>
                    
               </div>
               <!--以上是政策查询-->
               <div class="ui_import">
                   <div class="ui_import_nav">
                       相关资讯</div>
                   <div class="ui_import_cont">
                       
                       <ul>
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d9b9b6e10e8a88250b7690acf9225b2d&action=lists&catid=69&order=updatetime+DESC&num=15&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'69','order'=>'updatetime DESC','limit'=>'15',));}?>     
                           <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                           <li>
                               <a  target="_blank" href="<?php echo $v['url'];?>" <?php echo title_style($v[style]);?>>&middot;<?php echo str_cut($v['title'],60,'……');?></a>
                           </li>
                           <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>    
                       </ul>
                        
                   </div>
               </div>
               <div class="ui_import">
                   <div class="ui_import_nav">
                       热点资讯</div>
                   <div class="ui_import_cont">
                       <ul>
                           <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0ae1bbea72643ef7a27d649f8c4e522b&action=position&posid=20&order=listorder+DESC&num=7\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'20','order'=>'listorder DESC','limit'=>'7',));}?>
                            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>   
                           <li>
                               <a  href="<?php echo $r['url'];?>" target="_blank">&middot;<?php echo str_cut($r[title],54,'……');?></a>
                           </li>
                           <?php $n++;}unset($n); ?>  
                          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                       </ul>
                   </div>
               </div>
               <!--以上是相关链接-->

               <!--以上是图片链接-->
           </div>
           <div class="clear"></div>
       </div>
       <script language="javascript" type="text/javascript">

                       //预览并打印
                                   function preview() {
                                           bdhtml = window.document.body.innerHTML;                         sprnstr = "<!--startprint-->";
                                           eprnstr = "<!--endprint-->";
                                           prnhtml = bdhtml.substr(bdhtml.indexOf(sprnstr) + 17);
                                           prnhtml = prnhtml.substring(0, prnhtml.indexOf(eprnstr));
                                           window.document.body.innerHTML = prnhtml;
                                           window.print();
                                       }

                               //先判断是否登录 再进行跳转报名
                               $(".zxxxbm").click(function () {
                               if ($(".dlyhid").val() == "-1" || $(".dlyhid").val() == "") {
                               var Button = $(this).attr("id");
                                       var yhid = $(".dlyhid").attr("id");
                                       window.top.createDIV(window, "/Themes/cdweb/htm/Login.aspx?Controls=" + yhid + "&Button=" + Button, "用户登录", 450, 265, window, "", "", true);
                                       return false;
                               } else {
                               window.location = "/LMNR/ZXBM.aspx?TableName=PX_XX&PKID=" + $(this).attr("zxxxbmid") + "&YHID=" + $(".dlyhid").val();
               }
               return false;
           });

           var tablename = 'WZ_LMNR';
           var pkid = '33873';
           GXDJCS(tablename, pkid);
       </script>
       <script src="<?php echo JS_PATH;?>js/DetailStyle.js" type="text/javascript"></script>
       <!--中间主体结束-->

        <?php include template("content","footer"); ?>
    </body>
</html>
