<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
    <head>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=7" />
        <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
        <meta name="description" content="<?php echo $SEO['description'];?>"/>
        <meta name="keywords" content="<?php echo $SEO['keyword'];?>"/>
        <link href="<?php echo CSS_PATH;?>new/lanrenzhijia.css" type="text/css" rel="stylesheet" />
        <?php include template("content","header1_inclub"); ?>
        <link href="<?php echo CSS_PATH;?>new/jquery-ui.css" type="text/css" rel="stylesheet" />
        <script src="<?php echo JS_PATH;?>new/jquery-ui.min.js" type="text/javascript"></script>
        <script>
            jQuery(document).ready(function($) {
                    $('.theme-login').click(function(){
                            $('.theme-popover-mask').fadeIn(100);
                            $('.theme-popover').slideDown(200);
                    })
                    $('.theme-poptit .close').click(function(){
                            $('.theme-popover-mask').fadeOut(100);
                            $('.theme-popover').slideUp(200);
                    })
            })
      </script>
    </head>
    <body>
        <?php include template("content","header1"); ?>
        <div class="ex_click clear" style="margin-bottom:15px;">
            <div class="click_side">
                <div class="wjhg">
                    <div class="wjhg_nav clear">
                        <div class="wjhg_nav1"></div>
                        <div class="wjhg_nav2"><img src="<?php echo IMG_PATH;?>new1/click_icon_06.jpg" />往届回顾</div>
                        <div class="wjhg_nav3"><a href="#">更多>></a></div>
                    </div>
                    <div class="wjhg_info">
                        <ul>
                        </ul>
                    </div>
                </div>
                <!--以上是往届回顾-->
                <div class="cgs">
                    <div class="cgs_nav">
                        <div class="cgs_cur cgs_click" contentid="cgsqk"><a href="#">采购商情况</a></div>
                        <div class="cgs_cur sjcj" contentid="sjcjsj"><a href="#">上届成交数据</a></div>
                    </div>
                    <script type="text/javascript" language="javascript">
                        //控制点击更换下面列表
                        $(".cgs_cur").click(function () {
                            var cgs_cur = this;
                            $(".cgs_cur").each(function () {
                                if (this == cgs_cur) {
                                    if ($(this).hasClass("sjcj")) {
                                        $(this).removeClass("sjcj");
                                        $(this).addClass("cgs_click");
                                    }
                                } else {
                                    if ($(this).hasClass("cgs_click")) {
                                        $(this).removeClass("cgs_click");
                                        $(this).addClass("sjcj");
                                    }
                                }
                            });
                            $(".liangge").hide();
                            $("#" + $(cgs_cur).attr("contentid")).show();
                            return false;
                        });
                    </script>
                    <div class="wjhg_info liangge" id="cgsqk">
                        <ul>
                        </ul>
                    </div>
                    <div class="wjhg_info liangge" style=" display:none" id="sjcjsj">
                        <ul>
                        </ul>
                    </div>
                </div>
                <!--以上是采购商情况-->
                <div class="cgs">
                    <div class="ksqbt_nav">
                        <a href="#">更多>></a> <span>可申请资金</span>
                    </div>
                    <div class="wjhg_info">
                        <ul></ul>
                    </div>
                </div>
                <!--以上是可申请资金-->
                <div class="cgs">
                    <div class="ksqbt_nav">
                        <a href="<?php echo $CATEGORYS['18']['url'];?>">更多>></a> <span>组展机构</span>
                    </div>
                    <div class="wjhg_info">
                        <ul>
                        </ul>
                    </div>
                </div>
                <!--以上是组展机构-->
                <div class="wjhgimg">
                    <div class="wjhg_nav clear">
                        <div class="wjhg_nav1"></div>
                        <div class="wjhg_nav2"><img src="<?php echo IMG_PATH;?>new1/click_icon_06.jpg" />上届展会图片</div>
                        <div class="wjhg_nav3"><a href="#">更多>></a></div>
                    </div>
                    <div class="wjhgimg_info"></div>
                </div>
            </div>
            <div class="click_Rside">
                <div class="ex_c_cont clear">
                    <div class="exhi">
                        <div class="exhi_nav"><img src="<?php echo IMG_PATH;?>new1/click_icon_06.jpg" />展会信息</div>
                        <div class="exhi_info">
                            <table width="100%" border="0" bgcolor="#DBDBDB"  align="center" cellpadding="0" cellspacing="1" style="font-family:宋体;font-size:13px;">
                                <caption>&nbsp;
                                </caption>
                                <tr  bgcolor="#FFFFFF">
                                    <td height="60" colspan="2" scope="row" align="center"><font style="font-size:16px; font-weight:bold;"><?php echo $title;?></font></td>
                                </tr>
                                <tr  bgcolor="#FFFFFF">
                                    <td width="19%" height="30" align="center" bgcolor="#F6F6F6">展会区域: </td>
                                    <td width="81%">&nbsp;<?php echo $region;?></td>
                                </tr>
                                <tr  bgcolor="#FFFFFF">
                                    <td height="30" scope="row" align="center" bgcolor="#F6F6F6">展会地址：</td>
                                    <td>&nbsp;<?php echo $meeting_path;?></td>
                                </tr>
                                <tr  bgcolor="#FFFFFF">
                                    <td height="30" scope="row" align="center" bgcolor="#F6F6F6">展会时间：</td>
                                    <td>&nbsp;<?php echo $show_time;?><?php echo $start_time;?>至<?php echo $end_time;?></td>
                                </tr>
                                <tr  bgcolor="#FFFFFF">
                                    <td height="30" scope="row" align="center" bgcolor="#F6F6F6">组织方：</td>
                                    <td>&nbsp;<?php echo $organiser;?></td>
                                </tr>
                                <tr  bgcolor="#FFFFFF">
                                    <td height="30" scope="row" align="center" bgcolor="#F6F6F6">承办方：</td>
                                    <td>&nbsp;<?php echo $organizer;?></td>
                                </tr>

                                <tr  bgcolor="#FFFFFF">
                                    <td height="30" scope="row" colspan="2" align="left" bgcolor="#F6F6F6">展会简介：</td>
                                    <td>
                                        <br/>
                                    </td>
                                </tr>
                                <tr  bgcolor="#FFFFFF">
                                    <td colspan="2" align="left" bgcolor="white" class="lmnrdetail"  >
                                        <div style=" width:390px; margin-top:10px;">
                                            
                                            &nbsp; <b>展会概述：</b>
                                           　<p class="zzl"><?php echo $info;?></p>
                                            
                                            &nbsp; <b>展品范围：</b>
                                          　<p class="zzl"><?php echo $range;?></p>　
                                           
                                           <b>联系方式：</b>
                                           <p class="zzl"><?php echo $contact;?></p>
                                        </div>
                                    </td>
                                </tr>
                                <style>
                                    .zzl{margin: 5px 0px 15px 0px;box-sizing: border-box;pading:0px 10px;line-height:25px;}
                                </style>
                            </table>
                            <!--<a class="baoming" ><div class="join">我要参展</div></a>-->
                            <a class="baoming" ><div class="join btn theme-login" href="javascript:;">我要参展</div></a>    <!--参展的按钮-->
                        </div>
                    </div>
                    
                   <div class="theme-popover">
                       <div class="theme-poptit">
                           <a href="javascript:;" title="关闭" class="close">×</a>
                           <h3><?php
                       $userid = param::get_cookie('_userid');
                       ?>
                       <?php if($userid) { ?>
                       <font color="green">[<?php echo get_nickname();?>,您好,请填写并提交。]</font>
                       <?php } else { ?>
                       <font color="red">请您先[<a href="<?php echo APP_PATH;?>index.php?m=member&c=index&a=login&forward=<?php echo urlencode(get_url());?>&siteid=<?php echo $siteid;?>" class="login" style="color:red"> 登录</a> | <a target="_blank" href="<?php echo APP_PATH;?>index.php?m=member&c=index&a=register&siteid=<?php echo $siteid;?>" class="reg" style="padding:0px;color:red">注册 </a>]</font>
                       <?php } ?></h3>
                       </div>
                       <div class="theme-popbod dform">
                            <form action="<?php echo APP_PATH;?>index.php?m=formguide&c=index&a=show&formid=24&siteid=1" method="post" name="myform" id="myform"> 
                                <ol>                     
                                    <li><strong>公司名称：</strong><input class="ipt" type="text" name="info[companyname] log" id="companyname"/><font style="color: red;">&nbsp;&nbsp;&nbsp;*</font></li>
                                    <li><strong>展会名称：</strong><input class="ipt" type="text" name="info[showname] log" id="showname"/><font style="color: red;">&nbsp;&nbsp;&nbsp;*</font></li>
                                    <li><strong>联系人: &nbsp;</strong><input class="ipt" type="text" name="info[linkman] pwd" id="linkman"/><font style="color: red;">&nbsp;&nbsp;&nbsp;*</font></li>
                                    <li><strong>电话：&nbsp;</strong><input class="ipt" type="text" id="tel" name="info[tel] log"/><font style="color: red;">&nbsp;&nbsp;&nbsp;*</font></li>
                                    <li><strong>邮箱：&nbsp;</strong><input class="ipt" type="text" name="info[email] pwd" id="email"/><font style="color: red;">&nbsp;&nbsp;&nbsp;*</font></li>
                                    <li><strong>内容：&nbsp;</strong><textarea id="content TextArea1" name='info[content]' class="txtarea" style="margin:10px auto; width:230px; height: 100px;">      
                                        </textarea></li>
                                    <li><input class="btn btn-primary" name="dosubmit" id="dosubmit" type="submit" name="submit" value="提交 " /></li>                    
                                </ol>
                            </form>
                       </div>
                    </div>
                    <div class="theme-popover-mask"></div>
                    
                    <style>
                            .join{width:8px;}
                            .baoming:hover{text-decoration: none;}
                            .join:hover{color:orange;}
                            .dform ol li{line-height:40px;}
                            .dform ol{margin:5px 10px 15px 0px}
                     </style>
                    <!--参展申请报名的表单特效-->
               
                    
                    <!--以上是展会内容-->
                    <div class="detail_exhi">
                       <form action="./index.php?m=content&c=index&a=lists&catid=52" method="post" >
                        <div class="DT_cx">
                            <div class="DT_cx_w">
                                <div class="EC_polling">
                                    <label><b>展会名称</b>:</label><input name="title" type="text" id="" class="zhname"/>
                                </div>
                                <div class="EC_polling">
                                    <label><b>展会行业</b>:</label> <div style="width:150px;float:right;margin-right:50px;margin-top:1px;"><?php echo menu_linkage(3390,'L_3390');?></div>
                                    <input type="hidden" value="" id="hide_area_id" name="hide_area_id" />  
                                </div>
                                <div class="EC_polling_list clear">
                                    <label><b>展会地区</b>：</label>
                                    <input type="radio" value="1" name="item" checked="true" />中国境内
                                    <input type="radio" value="2" name="item" />亚洲其他<br />
                                    <input type="radio" value="3" name="item" />非洲
                                    <input type="radio" value="4" name="item" />欧洲
                                    <input type="radio" value="5" name="item" />美洲
                                    <input type="radio" value="6" name="item" />大洋洲
                                    <div class="EC_polling">
                                        <label><b>展会时间</b>:</label>从<input name="start_time" type="text" style="width:65px" class="datapiker" id="datepicker"/>到<input name="end_time" type="text" id="" style="width:65px" class="datapiker" />
                                    </div>
                                </div>
                                <div class="polling_but"> 
                                    <input type="submit"  value="" onclick="beforeSearch();" style="width:75px;height:27px;background: url(./statics/images/new/ct2_but_18.gif) 0 0 no-repeat;">
                                </div>
                                <div class="kong"></div>
                            </div>
                        </div>
                      </form>
                   <script>
                    function beforeSearch(){
                       var catid=$("#L_3390 input").val();
                        $("#hide_area_id").val(catid);

                        var radio_val=$("input[name='item']:checked").val();

                        var start_time=$("input[name='start_time']").val();
                        var end_time=$("input[name='end_time']").val();
                      }

                     $(".datapiker").datepicker();
                       jQuery(function($){  
                            $.datepicker.regional['zh-CN'] = {  
                                monthNames: ['一月','二月','三月','四月','五月','六月',  
                                '七月','八月','九月','十月','十一月','十二月'],  
                                dayNamesMin: ['日','一','二','三','四','五','六'],  
                                weekHeader: '周',  
                                dateFormat: 'yy-mm-dd',  
                                firstDay: 1,  
                                isRTL: false,  
                                showMonthAfterYear: true,  
                                yearSuffix: '年'};  
                            $.datepicker.setDefaults($.datepicker.regional['zh-CN']);  
                        });
                     </script>
                        <div class="DT_tjjg">
                            <div class="DT_tjjg_nav">
                                <a href="<?php echo $CATEGORYS['18']['url'];?>" target="_blank">更多>></a>
                                <span>推荐机构</span>
                            </div>
                            <div class="DT_tjjg_info">
                                <ul>
                                   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=221c64488e106c608433f1691eff0949&action=hits&catid=18&num=8&order=monthviews+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'18','order'=>'monthviews DESC',)).'221c64488e106c608433f1691eff0949');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>'18','order'=>'monthviews DESC','limit'=>'8',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                                   <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?> 
                                   <li><a target="_blank" href="<?php echo $r['url'];?>"><img src="<?php echo IMG_PATH;?>new/RIGHT_icon_13.gif" /><?php echo str_cut($r[title], 54, '……');?></a></li>
                                  <?php $n++;}unset($n); ?>
                                  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                                </ul>
                            </div>
                        </div>
                        <!-- 以上是组织机构 -->
                        <div class="DT_tjjg">
                            <div class="DT_tjjg_nav clear">
                                <div class="DT_cur DT_cur_check" contentid="tianqi"><a href="#">当前天气</a></div>
                                <div class="DT_cur cglb" contentid="hzcgg"><a href="<?php echo $CATEGORYS['89']['url'];?>">会址场馆</a></div>
                            </div>
                            <script type="text/javascript" language="javascript">
                                //控制点击更换下面列表
                                $(".DT_cur").click(function () {
                                    var DT_cur = this;
                                    $(".DT_cur").each(function () {
                                        if (this == DT_cur) {
                                            if ($(this).hasClass("cglb")) {
                                                $(this).removeClass("cglb");
                                                $(this).addClass("DT_cur_check");
                                            }
                                        } else {
                                            if ($(this).hasClass("DT_cur_check")) {
                                                $(this).removeClass("DT_cur_check");
                                                $(this).addClass("cglb");
                                            }
                                        }
                                    });
                                    $(".hzcg").hide();
                                    $("#" + $(DT_cur).attr("contentid")).show();
                                    return false;
                                });
                            </script>
                            <div class="DT_tjjg_info hzcg" id="tianqi">
                                <iframe style="color:#9b0101; filter: Chroma(Color=white);" width="245px"; height="100px;" frameborder="0"  marginheight="0" marginwidth="0" scrolling="no" src="<?php echo IMG_PATH;?>new1/ZHmeather.html"></iframe>
                            </div>
                            <div class="DT_tjjg_info hzcg" id="hzcgg" style=" display:none">
                                <ul>
                                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8237e740e70c20d800ee3b8a886577d5&action=hits&catid=89&num=8&order=monthviews+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'89','order'=>'monthviews DESC',)).'8237e740e70c20d800ee3b8a886577d5');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>'89','order'=>'monthviews DESC','limit'=>'8',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                                     <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                    <li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo IMG_PATH;?>new/RIGHT_icon_13.gif" /><?php echo str_cut($r[title], 56);?></a></li> 
                                     <?php $n++;}unset($n); ?>
                                     <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <script src="<?php echo JS_PATH;?>new/DJCSTJ.js" type="text/javascript"></script>
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
                    .detail_pl_nav{width:99.4%;height:56px;background:url(/Themes/cdweb/img/police/CONT_new_pl_11.gif) 0px 0px repeat-x;}
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
        </div>
        <!--以上是中间内容部分-->

       <?php include template("content","foot1"); ?>
    </body>
</html>
