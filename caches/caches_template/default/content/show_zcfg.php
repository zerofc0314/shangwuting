<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=7" />
        <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
        <meta name="description" content="<?php echo $SEO['description'];?>"/>
        <meta name="keywords" content="<?php echo $SEO['keyword'];?>"/>
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
        <style>
            .minddle_center{width:994px;margin:0 auto;}
        </style>

    </head>
    <body>
        <?php include template("content","header"); ?>
       </div>
        <div class="mid minddle_center" style="margin-bottom:15px;">
        <div class="ui_layout_right list_width">
            <div class="site">
                <div class="site_img"></div>
                <div class="site_write">
                    您的位置：<a target="_blank" href="<?php echo siteurl($siteid);?>">频道首页</a> &gt;&gt;
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
                        发布日期：<span><?php echo $inputtime;?></span>&nbsp;字体【<span style="cursor: pointer" size="16">大</span>&nbsp;<span style="cursor: pointer" size="14">中</span>&nbsp;
                        <span style="cursor: pointer" size="12">小</span>】&nbsp;&nbsp;&nbsp;
                        背景颜色:&nbsp;&nbsp;<img src="<?php echo IMG_PATH;?>new1/new-c-1.jpg" num="0" />
                        &nbsp;&nbsp;&nbsp;<img src="<?php echo IMG_PATH;?>new1/new-c-2.jpg" num="1" />
                        &nbsp;&nbsp;&nbsp;<img src="<?php echo IMG_PATH;?>new1/new-c-3.jpg" num="2" />
                        &nbsp;&nbsp;&nbsp;<img src="<?php echo IMG_PATH;?>new1/new-c-4.jpg" num="3" />
                        &nbsp;&nbsp;&nbsp;<img src="<?php echo IMG_PATH;?>new1/new-c-5.jpg" num="4" />
                        <a target="_blank" onclick="preview()">[打印政策]</a>
                    </div>
                    <div class="CONT_wh">
                        <table width="640" border="0">
                            <tr>
                                <td height="24" align="left" valign="middle">
                                    <font class="word_color">【法规类型】</font><span>政策法规(普通)
                                    </span>
                                </td>
                                <td height="24" align="left" valign="middle">
                                    <font class="word_color">【内容类别】</font><span>商务,海关</span>
                                </td>
                            </tr>
                            <tr>
                                <td height="24" align="left" valign="middle">
                                    <font class="word_color">【文 号】</font><span> <?php echo $fileNumber;?></span>
                                </td>
                                <td height="24" align="left" valign="middle">
                                    <font class="word_color">【发文机关】</font><span>商务部 海关总署</span>
                                </td>
                            </tr>
                            <tr>
                                <td height="24" align="left" valign="middle">
                                    <font class="word_color">【发布日期】</font><span><?php echo $inputtime;?></span>
                                </td>
                                <td height="24" align="left" valign="middle">
                                    <font class="word_color">【生效日期】</font><span></span>
                                </td>
                            </tr>
                            <tr>
                                <td height="24" align="left" valign="middle">
                                    <font class="word_color">【效 力】</font><span>有效</span>
                                </td>
                                <td height="24" align="left" valign="middle">
                                    &nbsp;
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!--startprint-->
                    <div class="CONT_p">
                        <?php echo $content;?>>
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
    
         <?php if($allow_comment && module_exists('comment')) { ?>
                <iframe src="<?php echo APP_PATH;?>index.php?m=comment&c=index&a=init&commentid=<?php echo id_encode("content_$catid",$id,$siteid);?>&iframe=1" width="100%" height="100%" id="comment_iframe" frameborder="0" scrolling="no"></iframe>
         <?php } ?>
            </div>
        </div>
            
        <!--以上是内容页的内容-->
        <div class="ui_layout_left">
            <div class="ui_lay_zccx">
                <div class="ui_zccx_nav"> </div>
                
              <form action="#" method="post" id="searchForm">
                <div class="ui_lay_cont">
                    <div class="ui_check">
                        <label>
                            <input name="classify" type="radio" value="21" id="zcfg" checked="ckecked" class="rdozcfg"/>政策法规
                        </label>
                        <label>
                            <input name="classify" type="radio" id="fczc" value="22" class="rdofczc" />扶持政策
                        </label>
                    </div>
                    <div class="formcont">
                        <div>
                            <label for="title">
                                标题：</label><input name="title" type="text" id="title" class="zcbt" />
                        </div>
                        <div>
                            <label for="title">
                                文号：</label><input name="fileNumb" type="text" id="" class="zcwh" />
                        </div>
                        <div>
                            <label for="title">
                                关键字：</label><input name="keywords" type="text" id="" class="gjz" />
                        </div>
                        <div class="btn">
                            <input type="submit" class="btnzccx_1" value="" onclick="beforeSubmit();"/>
                        </div>
                    </div>
                </div>
              </form>
            <script>
                function beforeSubmit(){
                    var catid=$("input[name='classify']:checked").val();
                    var url="./index.php?m=content&c=index&a=lists&catid="+catid;
                    $("#searchForm").attr("action",url);
                }
            </script>
                
            </div>
            <!--以上是政策查询-->
            <div class="ui_but">
                <a href="<?php echo $CATEGORYS['21']['url'];?>" target="_blank">
                    <img src="<?php echo IMG_PATH;?>new/Policy_zcfg_10.gif" alt="政策法规" /></a>
            </div>
            <div class="ui_but">
                <a href="<?php echo $CATEGORYS['22']['url'];?>" target="_blank">
                    <img src="<?php echo IMG_PATH;?>new/Policy_fczc_12.gif" alt="扶持政策" /></a>
            </div>
            <!--以上是图片链接-->
            <div class="ui_import">
                <div class="ui_import_nav">
                    重要政策法规推荐</div>
                <div class="ui_import_cont">
                    <ul>
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d92e9a197075d3d833a1208ad27cf86f&action=position&posid=18&order=listorder+DESC&num=7\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'18','order'=>'listorder DESC','limit'=>'7',));}?>
        	 	<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>      
                        <li><img src="<?php echo IMG_PATH;?>new/icon_13.gif" /><a  href="<?php echo $r['url'];?>" target="_blank"><?php echo str_cut($r[title],54,'……');?></a></li>
                       <?php $n++;}unset($n); ?>  
                       <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </ul>
                </div>
            </div>
            <div class="ui_import">
                <div class="ui_import_nav">
                    重要扶持政策推荐</div>
                <div class="ui_import_cont">
                    <ul>
                         <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9c7aede6d37643b22b57e44cdac44538&action=position&posid=19&order=listorder+DESC&num=7\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'19','order'=>'listorder DESC','limit'=>'7',));}?>
        	 	<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>  
                        <li><img src="<?php echo IMG_PATH;?>new/icon_13.gif" /><a  href="<?php echo $r['url'];?>" target="_blank"><?php echo str_cut($r[title],54,'……');?></a></li>
                        <?php $n++;}unset($n); ?>  
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </ul>
                </div>
            </div>
            <style>
                .ui_import_nav{text-indent: 70px;}
            </style>
        </div>
        
        <div class="clear"> </div>
    </div>
    <script language="javascript" type="text/javascript">

        //预览并打印
        function preview() {
            bdhtml = window.document.body.innerHTML;
            sprnstr = "<!--startprint-->";
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
                window.top.createDIV(window, '/ZJSB/ZJBM.aspx?ZCID=" + $(this).attr("zxxxbmid") + "&YHID=" + $(".dlyhid").val()', "资金项目申请", 700, 405);
            }
            return false;
        });

        var tablename = 'XX_ZCFG';
        var pkid = '664';
        GXDJCS(tablename, pkid);
    </script>
    <script src="<?php echo JS_PATH;?>new/DetailStyle.js" type="text/javascript"></script>
    <!--中间主体结束-->
 
      <?php include template("content","footer"); ?>   
    </body>
</html>
