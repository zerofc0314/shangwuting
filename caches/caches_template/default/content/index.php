<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>    
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=7" />
        <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
        <meta name="description" content="<?php echo $SEO['description'];?>" />
        <meta name="keywords" content="<?php echo $SEO['keyword'];?>" />
        <?php include template("content","header_inclub"); ?>
    </head>

    <body>
        <?php include template("content","header"); ?>
        <?php include template("content","header_index"); ?>
        <!--main-->
        <div class="mid">
            <div class="rmbhl">
                <div class="rmbhl_left">
                </div>
                <div class="rmbhl_mid" style="height: 35px; width: 841px; overflow: hidden;">
                    <div class="zxxl11" style="height: 0px;"></div>
                </div>
                <div>
                </div>
                <script language="javascript" type="text/javascript">
                    var timespan1 = 500; //每屏划过时间
                    var timespan2 = 2000; //切屏间隔时间
                    function gotop() {
                        animtop();
                        stopexe = setTimeout("gotop()", timespan2);
                    }
                    ;

                    function animtop() {
                        $(".zxxl11").animate({
                            marginTop: "-=35"
                        }, timespan1, function () {
                            if ($(".zxxl11").css("margin-top") == "-0px") {
                                $(".zxxl11").css("margin-top", "0px");
                            }
                        });
                    }
                    var stopexe;
                    stopexe = setTimeout("gotop()", timespan2);
                    $(".zxxl11").mouseover(function () {
                        clearTimeout(stopexe);
                    });
                    $(".zxxl11").mouseout(function () {
                        stopexe = setTimeout("gotop()", timespan2);
                    });

                </script>
                <div class="rmbhl_right">
                </div>
                <div class="clear">
                </div>
            </div>
            <!--以上是人民币汇率-->
            <div class="side_1">
                <div class="side_1_left">
                    <div class="zx">

                        <div class="zx_top">
                            <ul>
                                <li><a class="xz topbtli" contentid="zx_bottom1" href="#">资讯</a></li>
                                <li><a class="fff topbtli" contentid="zx_bottom2" href="#">政策</a></li>
                                <li><a class="fff topbtli" contentid="zx_bottom3" href="#">培训</a></li>
                                <li><a class="fff topbtli" contentid="zx_bottom4" href="#">公告</a></li>
                            </ul>
                            <script type="text/javascript" language="javascript">
                                //控制点击更换下面列表
                                $(".topbtli").click(function () {
                                    var topbtli = this;
                                    $(".topbtli").each(function () {
                                        if (this == topbtli) {
                                            if ($(this).hasClass("fff")) {
                                                $(this).removeClass("fff");
                                                $(this).addClass("xz");
                                            }
                                        } else {
                                            if ($(this).hasClass("xz")) {
                                                $(this).removeClass("xz");
                                                $(this).addClass("fff");
                                            }
                                        }
                                    });
                                    $(".zx_bottom").hide();
                                    $("#" + $(topbtli).attr("contentid")).show();
                                    return false;
                                });
                            </script>
                        </div>

                        <div class="zx_bottom" id="zx_bottom1">   <!--资讯幻灯片-->
                            <script language="javascript" type="text/javascript">
                         <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c3b572af4a758d8319d1b9f6df88feca&action=position&posid=23&order=listorder+DESC&thumb=1&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'23','order'=>'listorder DESC','thumb'=>'1','limit'=>'5',));}?>
                          var config='1|0xffffff|0x0099ff|50|0xffffff|0x0099ff|0x000000';
                  //-- config 参数设置 -- 自动播放时间(秒)|文字颜色|文字背景色|文字背景透明度|按键数字颜色|当前按键颜色|普通按键色彩 --
                                var pic_width = 364;
                                if ($.browser.msie) {
                                    var pic_height = 219;
                                    var text_height = 20;
                                } else {
                                    var pic_height = 236;
                                    var text_height = 35;
                                }
                                   
                                    var pics='<?php $num = 1?>
                                    <?php $n=1; if(is_array($data)) foreach($data AS $n => $r) { ?>
                                    <?php echo $r['thumb'];?>
                                    <?php if($num%5!=0) { ?>|<?php } ?>
                                    <?php $num++?>
                                    <?php $n++;}unset($n); ?>';
                                        
                                    var links='<?php $num2 = 1?>
                                    <?php $n=1; if(is_array($data)) foreach($data AS $n => $v) { ?>
                                    <?php echo $v['url'];?>
                                    <?php if($num2%5!=0) { ?>|<?php } ?>
                                    <?php $num2++?>
                                    <?php $n++;}unset($n); ?>';
                                        
                                    var texts='<?php $num3 = 1?>
                                    <?php $n=1; if(is_array($data)) foreach($data AS $n => $k) { ?>
                                    <?php echo $k['title'];?>
                                    <?php if($num3%5!=0) { ?>|<?php } ?>
                                    <?php $num3++?>
                                    <?php $n++;}unset($n); ?>';                            
                                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                            </script>
                            <script src="<?php echo JS_PATH;?>new/FlashPic.js" type="text/javascript"></script>
                        </div>

                        <div class="zx_bottom" id="zx_bottom2" style="display: none;">   <!--政策幻灯片-->
                            <script language="javascript" type="text/javascript">
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=121049262863443a09dad357ff824e34&action=position&posid=24&order=listorder+DESC&thumb=1&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'24','order'=>'listorder DESC','thumb'=>'1','limit'=>'5',));}?>
                                //注：图片只能为长宽大于等于360*257
                                var pic_width = 364;
                                if ($.browser.msie) {
                                    var pic_height = 219;
                                    var text_height = 20;
                                } else {
                                    var pic_height = 236;
                                    var text_height = 35;
                                }
                                  var config='3|0xffffff|0x0099ff|50|0xffffff|0x0099ff|0x000000';
                                    //-- config 参数设置 -- 自动播放时间(秒)|文字颜色|文字背景色|文字背景透明度|按键数字颜色|当前按键颜色|普通按键色彩 --
                                    var pics='<?php $num = 1?>
                                    <?php $n=1; if(is_array($data)) foreach($data AS $n => $r) { ?>
                                    <?php echo $r['thumb'];?>
                                    <?php if($num%5!=0) { ?>|<?php } ?>
                                    <?php $num++?>
                                    <?php $n++;}unset($n); ?>';
                                        
                                    var links='<?php $num2 = 1?>
                                    <?php $n=1; if(is_array($data)) foreach($data AS $n => $v) { ?>
                                    <?php echo $v['url'];?>
                                    <?php if($num2%5!=0) { ?>|<?php } ?>
                                    <?php $num2++?>
                                    <?php $n++;}unset($n); ?>';
                                        
                                    var texts='<?php $num3 = 1?>
                                    <?php $n=1; if(is_array($data)) foreach($data AS $n => $k) { ?>
                                    <?php echo $k['title'];?>
                                    <?php if($num3%5!=0) { ?>|<?php } ?>
                                    <?php $num3++?>
                                    <?php $n++;}unset($n); ?>';                            
                                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                            </script>
                            <script src="<?php echo JS_PATH;?>new/FlashPic.js" type="text/javascript"></script>
                        </div>

                        <div class="zx_bottom" id="zx_bottom3" style="display: none;">  <!--培训幻灯片[展示未动态化]-->
                            <script language="javascript" type="text/javascript">
                         <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6827cdaeb7190f7153e3584608100a4f&action=position&posid=xx&order=listorder+DESC&thumb=1&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'xx','order'=>'listorder DESC','thumb'=>'1','limit'=>'5',));}?>
                                //注：图片只能为长宽大于等于360*257
                                var pic_width = 364;
                                if ($.browser.msie) {
                                    var pic_height = 219;
                                    var text_height = 20;
                                } else {
                                    var pic_height = 236;
                                    var text_height = 35;
                                }
                                var texts = '青羊区2015年度“互联网+”培训会...|金牛区2015年度“互联网+”培训会...|郫县2015年度“互联网+”及“一带...|青羊区2015年度外经贸扶持政策培训...';
                                var pics = './statics/images/new/f80844a6-5752-4d86-9280-f2681734c4aa.jpg|./statics/images/new/bj_03.jpg|./statics/images/new/f80844a6-5752-4d86-9280-f2681734c4aa.jpg|./statics/images/new/bj_03.jpg';
                                var links = '/LMNR/LMNRDetail.aspx?PKID=33706|/LMNR/LMNRDetail.aspx?PKID=33670|/LMNR/LMNRDetail.aspx?PKID=33528|/LMNR/LMNRDetail.aspx?PKID=33447';
                          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                            </script>
                            <script src="<?php echo JS_PATH;?>new/FlashPic.js" type="text/javascript"></script>
                        </div>

                        <div class="zx_bottom" id="zx_bottom4" style="display: none;">  <!--公告幻灯片-->
                            <script language="javascript" type="text/javascript">
                             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=08e43334754fc355638b6b7a9f080347&action=position&posid=25&order=listorder+DESC&thumb=1&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'25','order'=>'listorder DESC','thumb'=>'1','limit'=>'5',));}?>
                                //注：图片只能为长宽大于等于360*257
                                var pic_width = 364;
                                if ($.browser.msie) {
                                    var pic_height = 219;
                                    var text_height = 20;
                                } else {
                                    var pic_height = 236;
                                    var text_height = 35;
                                }
                                 var config='3|0xffffff|0x0099ff|50|0xffffff|0x0099ff|0x000000';
                                    //-- config 参数设置 -- 自动播放时间(秒)|文字颜色|文字背景色|文字背景透明度|按键数字颜色|当前按键颜色|普通按键色彩 --
                                    var pics='<?php $num = 1?>
                                    <?php $n=1; if(is_array($data)) foreach($data AS $n => $r) { ?>
                                    <?php echo $r['thumb'];?>
                                    <?php if($num%5!=0) { ?>|<?php } ?>
                                    <?php $num++?>
                                    <?php $n++;}unset($n); ?>';
                                        
                                    var links='<?php $num2 = 1?>
                                    <?php $n=1; if(is_array($data)) foreach($data AS $n => $v) { ?>
                                    <?php echo $v['url'];?>
                                    <?php if($num2%5!=0) { ?>|<?php } ?>
                                    <?php $num2++?>
                                    <?php $n++;}unset($n); ?>';
                                        
                                    var texts='<?php $num3 = 1?>
                                    <?php $n=1; if(is_array($data)) foreach($data AS $n => $k) { ?>
                                    <?php echo $k['title'];?>
                                    <?php if($num3%5!=0) { ?>|<?php } ?>
                                    <?php $num3++?>
                                    <?php $n++;}unset($n); ?>';      
                                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                            </script>
                            <script src="<?php echo JS_PATH;?>new/FlashPic.js" type="text/javascript"></script>
                        </div>
                    </div>

                    <!---通知公告部分开始-->
                    <div class="tzgg">
                        <div class="tzgg_top">
                            <a target="_blank" href="<?php echo $CATEGORYS['25']['url'];?>">更多>></a>
                        </div>
                        <div class="tzgg_bottom">
                            <ul>
                                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ab267cd40e04dc36e69250c346a5c080&action=hits&catid=25&num=8&order=monthviews+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'25','order'=>'monthviews DESC',)).'ab267cd40e04dc36e69250c346a5c080');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>'25','order'=>'monthviews DESC','limit'=>'8',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                <li>
                                    <img src="<?php echo IMG_PATH;?>new/tzgg_icon_15.jpg" />
                                   <a href="<?php echo $r['url'];?>" class="new2" target="_blank" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title], 70, '……');?></a>
                                </li>
                                <?php $n++;}unset($n); ?>
                                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>    
                            </ul>
                        </div>
                    </div>
                    <!---通知公告部分结束-->
                    <style>
                         .tzgg_bottom ul li a:hover{color:red;}                                                                                       
                    </style>
                    
                    
                </div>
                <!-----------------side_1左边的内容----------->
                <div class="side_1_mid">
                    <div class="hyyw">
                        <div class="hyyw_top">
                            <h5>行业要闻</h5>
                            <a target="_blank" href="<?php echo $CATEGORYS['69']['url'];?>">更多>></a>
                        </div>
                        <div class="hyyw_bottom">
                            
                            <div class="hyyw_bottom_img">
                              <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6cbb2e10717daaeeb1e21856cb34e76b&action=lists&catid=69&order=updatetime+DESC&thumb=1&num=1&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'69','order'=>'updatetime DESC','thumb'=>'1','limit'=>'1',));}?>
                                <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                                <a  href="<?php echo $v['url'];?>"target="_blank">
                                    <img width="85" height="48" img src="<?php echo thumb($v[thumb],85,48);?> "/>
                                </a> 
                                <?php $n++;}unset($n); ?>
                                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>      
                            </div>
                            
                            <div class="hyyw_bottom_xx"> 
                               <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c6cfde5e3a938ee5e0be333203145632&action=lists&catid=69&order=updatetime+DESC&num=1&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'69','order'=>'updatetime DESC','limit'=>'1',));}?>
                              <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                                <ul>
                                    <li style="text-align:center;">
                                        <a style="font-weight:bold;color:#333333;word-spacing:0px;font-size:15px;" href="<?php echo $v['url'];?>" target="_blank" <?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],30);?></a>
                                    </li>
                                </ul>
                                <p>      
                                    <?php echo str_cut($v['description'],200,'……');?>
                                    <a  href="<?php echo $v['url'];?>" target="_blank">全文</a>
                                </p> 
                               <?php $n++;}unset($n); ?>
                                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>    
                            </div>
                            
                            <div class="clear"></div>
                            <div class="clear"></div>
                            <div class="list">
                                <a target="_blank"  href="<?php echo $CATEGORYS['72']['url'];?>">鞋</a> &nbsp;
                                <a target="_blank"  href="<?php echo $CATEGORYS['73']['url'];?>">服装</a> &nbsp;
                                <a target="_blank"  href="<?php echo $CATEGORYS['74']['url'];?>">电子</a> &nbsp;
                                <a target="_blank"  href="<?php echo $CATEGORYS['75']['url'];?>">机械</a> &nbsp;
                                <a target="_blank"  href="<?php echo $CATEGORYS['76']['url'];?>">化工</a> &nbsp;
                                <a target="_blank"  href="<?php echo $CATEGORYS['77']['url'];?>">加工贸易</a> &nbsp;
                                <a target="_blank"  href="<?php echo $CATEGORYS['78']['url'];?>">其他</a> &nbsp;
                            </div>
                        </div>
                    </div>
                    <div class="hyyw" style="margin-top: 10px;">
                        <div class="hyyw_top">
                            <h5>
                                国内要闻
                            </h5>
                            <a target="_blank" href="<?php echo $CATEGORYS['70']['url'];?>">更多>></a>
                        </div>
                        <div class="hyyw_bottom">
                            <div class="hyyw_bottom_img">
                                 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4a535350b002989a5fbd429fa79149b1&action=lists&catid=70&order=updatetime+DESC&thumb=1&num=1&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'70','order'=>'updatetime DESC','thumb'=>'1','limit'=>'1',));}?>
                                   <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                                <a  href="<?php echo $v['url'];?>" target="_blank">
                                    <img width="85" height="48" src="<?php echo thumb($v[thumb],85,48);?>"/>
                                </a> 
                                 <?php $n++;}unset($n); ?>
                                  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>        
                            </div>
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=15d3b46a370eeaebe0d9ae01fe7ffc11&action=lists&catid=70&num=3&order=id+DESC&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'70','order'=>'id DESC','limit'=>'3',));}?>
                            <div class="hyyw_bottom_xx"> 
                                <ul>
                                    <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                                    <li>
                                        <a href="<?php echo $v['url'];?>" target="_blank" title="{$v['title']" ><?php echo str_cut($v['title'],50,'……');?></a>
                                    </li> 
                                    <?php $n++;}unset($n); ?>
                                </ul>
                            </div>
                             <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
                             
                            <div class="clear"></div>
                            
                              <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f30b16ab0226f908891f692cdc6c4e77&action=hits&catid=70&num=2&order=monthviews+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'70','order'=>'monthviews DESC',)).'f30b16ab0226f908891f692cdc6c4e77');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>'70','order'=>'monthviews DESC','limit'=>'2',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                            <div class="list">
                                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                <a  href="<?php echo $v['url'];?>" target="_blank"><?php echo str_cut($v['title'],80,'……');?></a>
                                <?php $n++;}unset($n); ?>
                            </div>
                             <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>          
                        </div>
                    </div>
                    
                    <div class="hyyw" style="margin-top: 10px;">
                        <div class="hyyw_top">
                            <h5>
                                国际要闻
                            </h5>
                            <a target="_blank" href="<?php echo $CATEGORYS['71']['url'];?>">更多>></a>
                        </div>
                        <div class="hyyw_bottom">
                            <div class="hyyw_bottom_img">
                                 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=544293578926d0096d1bd283f331a329&action=lists&catid=71&order=updatetime+DESC&thumb=1&num=1&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'71','order'=>'updatetime DESC','thumb'=>'1','limit'=>'1',));}?>
                                   <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                                <a  href="<?php echo $v['url'];?>" target="_blank">
                                    <img width="85" height="48" src="<?php echo thumb($v[thumb],85,48);?>"/>
                                </a> 
                                   <?php $n++;}unset($n); ?>
                                  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>   
                            </div>
                            
                             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=084255c0f4f2c1f5736a66f0b01f40dc&action=lists&catid=71&num=3&order=id+DESC&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'71','order'=>'id DESC','limit'=>'3',));}?>
                            <div class="hyyw_bottom_xx"> 
                                <ul> 
                                 <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                                    <li>
                                        <a href="<?php echo $v['url'];?>" target="_blank" title="{$v['title']" ><?php echo str_cut($v['title'],52,'……');?></a>
                                    </li> 
                                  <?php $n++;}unset($n); ?> 
                                </ul>
                            </div>
                             <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                            <div class="clear"></div>
                            
                              <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6395fa261e1b44ccaf2d24ace60792e0&action=hits&catid=71&num=2&order=monthviews+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'71','order'=>'monthviews DESC',)).'6395fa261e1b44ccaf2d24ace60792e0');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>'71','order'=>'monthviews DESC','limit'=>'2',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                            <div class="list">
                                 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                <a  href="<?php echo $r['url'];?>" target="_blank"><?php echo str_cut($r[title], 70, '……');?></a>
                                <?php $n++;}unset($n); ?>
                            </div>
                                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                        </div>
                    </div>
                </div>
                <!-----------------side_1中间的内容----------->
                <div class="side_1_right">
                    <div class="zjzc">
                        <div class="zjzc_title">
                            <a target="_blank" href="<?php echo $CATEGORYS['5']['url'];?>">资金申报</a></div>
                        <div class="zd">

                            <a href="#" target="_blank" style="text-decoration: NONE">
                                <p>江西省外贸公共服务平台</p>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;手机客户端APP正式上线</p>
                            </a>
                        </div>
                        <div class="zjzc_bottom">
                            <div class="zjzc_bottom_title">
                                <a target="_blank" href="<?php echo $CATEGORYS['21']['url'];?>">更多>></a>
                            </div>
                            <div class="clear"></div>
                            <div class="zjzc_bottom_cont">
                                <ul>
                                  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=696b9168804105cb8f8b1ecd594e6b3d&action=hits&catid=21&num=5&order=monthviews+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'21','order'=>'monthviews DESC',)).'696b9168804105cb8f8b1ecd594e6b3d');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>'21','order'=>'monthviews DESC','limit'=>'5',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                                  <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                    <li>
                                        <img src="<?php echo IMG_PATH;?>new/tzgg_icon_15.jpg"/>
                                        <a target="_blank" href="<?php echo $r['url'];?>" ><?php echo str_cut($r[title], 54, '……');?></a>
                                    </li>
                                   <?php $n++;}unset($n); ?>
                                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-----------------以上是资金政策----------->
                    <!--培训基地部分开始-->
                    <div class="pxjd">
                        <div class="pxjd_title">
                            <a target="_blank" href="#">更多>></a>
                        </div>
                        <div class="pxjd_cont">
                            <ul>
                                <li>
                                    <img src="<?php echo IMG_PATH;?>new/tzgg_icon_15.jpg" />
                                    <a href="/PXJD/PXJDDetail.aspx?PKID=35" target="_blank">2015年度郫县“政府扶持政策”培...</a>
                                </li>
                                <li>
                                    <img src="<?php echo IMG_PATH;?>new/tzgg_icon_15.jpg" />
                                    <a href="/PXJD/PXJDDetail.aspx?PKID=33" target="_blank">江西外贸公共服务平台最新出口退税实...</a>
                                </li>
                                <li>
                                    <img src="<?php echo IMG_PATH;?>new/tzgg_icon_15.jpg" />
                                    <a href="/PXJD/PXJDDetail.aspx?PKID=32" target="_blank">2015年度崇州市外贸企业培训会顺...</a>
                                </li>
                                <li>
                                    <img src="<?php echo IMG_PATH;?>new/tzgg_icon_15.jpg" />
                                    <a href="/PXJD/PXJDDetail.aspx?PKID=31" target="_blank">2015年度郫县企业外贸形势、政策...</a>
                                </li>
                                <li>
                                    <img src="<?php echo IMG_PATH;?>new/tzgg_icon_15.jpg" /><a href="/PXJD/PXJDDetail.aspx?PKID=29" target="_blank">武侯区2014年对外贸易业务培训会...</a>
                                </li>
                                <li>
                                    <img src="<?php echo IMG_PATH;?>new/tzgg_icon_15.jpg" />
                                    <a href="/PXJD/PXJDDetail.aspx?PKID=26" target="_blank">崇州市2014年外贸业务培训会顺利...</a>
                                </li>
                                <li>
                                    <img src="<?php echo IMG_PATH;?>new/tzgg_icon_15.jpg" />
                                    <a href="/PXJD/PXJDDetail.aspx?PKID=21" target="_blank">崇州市“保风险、获融资，助力外贸企...</a>
                                </li>
                            </ul>
                            <div class="clear"></div>
                        </div>
                    </div>
                     <!--培训基地部分结束-->
                    
                </div>
                <div class="clear"></div>
            </div>
            <!--以上是side_1-->
            <div class="guanggao">
                <a href="#"><img src="<?php echo IMG_PATH;?>new/guanggao_23.jpg" /></a>
            </div>
            <!--以上是广告-->
            <div class="side_2">
                <div class="zhanhui">
                    <div class="zhanhui_title clear">

                        <div style="float:left;line-height:33px;">
                            <a href="<?php echo $CATEGORYS['52']['url'];?>" class="dj_zhanhui newzh" zhxxid="zhdiv_count1">最新展会</a> 
                            <a zhxxid="zhdiv_count2" class="newzh newzh1" href="<?php echo $CATEGORYS['91']['url'];?>">展会资讯</a>
                            <a zhxxid="zhdiv_count3" class="newzh newzh1" href="<?php echo $CATEGORYS['54']['url'];?>">参展知识</a>
                        </div>

                        <div style="float:right;line-height:33px;"> 
                            <a target="_blank"  class="zxc" href="/ZHZL/ZHZLList.aspx">更多>></a>
                        </div>

                        <script type="text/javascript" language="javascript">
                                //控制点击更换下面列表
                                $(".newzh").click(function () {
                                    var topbtli = this;
                                    $(".newzh").each(function () {
                                        if (this == topbtli) {
                                            if ($(this).hasClass("newzh1")) {
                                                $(this).removeClass("newzh1");
                                                $(this).addClass("dj_zhanhui");
                                            }
                                        } else {
                                            if ($(this).hasClass("dj_zhanhui")) {
                                                $(this).removeClass("dj_zhanhui");
                                                $(this).addClass("newzh1");
                                            }
                                        }
                                    });
                                    $(".zhdiv_count").hide();
                                    $("#" + $(topbtli).attr("zhxxid")).show();
                                    if ($(topbtli).attr("zhxxid") == "zhdiv_count1") {
                                        $(".zxc").attr("href", "<?php echo $CATEGORYS['52']['url'];?>");
                                    } else if ($(topbtli).attr("zhxxid") == "zhdiv_count2") {
                                        $(".zxc").attr("href", "<?php echo $CATEGORYS['91']['url'];?>");
                                    } else if ($(topbtli).attr("zhxxid") == "zhdiv_count3") {
                                        $(".zxc").attr("href", "<?php echo $CATEGORYS['54']['url'];?>");
                                    }
                                    return false;
                                });
                        </script>
                        <div class="clear"></div>
                    </div>
                    <div class="zhanhui_cont">

                        <div class="zhanhui_cont_img">
                            <script language="javascript" type="text/javascript">
                                 //注：图片只能为长宽大于等于317*257 
                              <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=132335f99fcf4a0ddd78b4f4e1cd12b9&action=position&posid=1&order=listorder+DESC&thumb=1&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'1','order'=>'listorder DESC','thumb'=>'1','limit'=>'5',));}?>
                                    var pic_width = 312;
                                    var pic_height = 227;
                                    var config='3|0xffffff|0x0099ff|50|0xffffff|0x0099ff|0x000000';
                                    var text_height = 30;
                                    //-- config 参数设置 -- 自动播放时间(秒)|文字颜色|文字背景色|文字背景透明度|按键数字颜色|当前按键颜色|普通按键色彩 --
                                    var pics='<?php $num = 1?>
                                    <?php $n=1; if(is_array($data)) foreach($data AS $n => $r) { ?>
                                    <?php echo $r['thumb'];?>
                                    <?php if($num%5!=0) { ?>|<?php } ?>
                                    <?php $num++?>
                                    <?php $n++;}unset($n); ?>';
                                        
                                    var links='<?php $num2 = 1?>
                                    <?php $n=1; if(is_array($data)) foreach($data AS $n => $v) { ?>
                                    <?php echo $v['url'];?>
                                    <?php if($num2%5!=0) { ?>|<?php } ?>
                                    <?php $num2++?>
                                    <?php $n++;}unset($n); ?>';
                                        
                                    var texts='<?php $num3 = 1?>
                                    <?php $n=1; if(is_array($data)) foreach($data AS $n => $k) { ?>
                                    <?php echo $k['title'];?>
                                    <?php if($num3%5!=0) { ?>|<?php } ?>
                                    <?php $num3++?>
                                    <?php $n++;}unset($n); ?>';                            
                                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                            </script>
                            <script src="<?php echo JS_PATH;?>new/FlashPic.js" type="text/javascript"></script>
                        </div>
                        <div class="zhdiv_count" id="zhdiv_count1">
                            <div class="zhanhui_cont_xx">
                                <ul>
                                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=29e74f56f739b93d5653d47e24c122a5&action=lists&catid=94&order=updatetime+DESC&num=10&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'94','order'=>'updatetime DESC','limit'=>'10',));}?>
                                    <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                                    <li><span><?php echo date('Y-m-d',$v[inputtime]);?></span>
                                        <a href="<?php echo $v['url'];?>" target="_blank"><?php echo str_cut($v['title'],76);?></a>
                                    </li>
                                    <?php $n++;}unset($n); ?>
                                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                                </ul>
                            </div>
                            <div class="clear"></div>
                        </div>

                        <div class="zhdiv_count" id="zhdiv_count2" style="display: none;">
                            <div class="zhanhui_cont_xx">
                                <ul>
                                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5a8afe38fb34f2e4b2801862d3f5d86d&action=hits&catid=91&num=11&order=monthviews+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'91','order'=>'monthviews DESC',)).'5a8afe38fb34f2e4b2801862d3f5d86d');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>'91','order'=>'monthviews DESC','limit'=>'11',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                                     <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                    <li>
                                        <span><?php echo date('Y-m-d',$r[inputtime]);?></span>
                                        <a href="<?php echo $r['url'];?>" target="_blank"><?php echo str_cut($r[title], 58);?> </a>
                                    </li>
                                    <?php $n++;}unset($n); ?>
                                     <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                                </ul>
                            </div>
                            <div class="clear"></div>
                        </div>

                        <div class="zhdiv_count" id="zhdiv_count3" style="display: none;">
                            <div class="zhanhui_cont_xx">
                                <ul>
                                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=449b7743f70ea753f2c7050d51cf8194&action=hits&catid=54&num=11&order=monthviews+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'54','order'=>'monthviews DESC',)).'449b7743f70ea753f2c7050d51cf8194');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>'54','order'=>'monthviews DESC','limit'=>'11',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                                     <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                    <li>
                                        <span><?php echo date('Y-m-d',$r[inputtime]);?></span>
                                        <a href="<?php echo $r['url'];?>" target="_blank"><?php echo str_cut($r[title], 58);?></a>
                                    </li>
                                      <?php $n++;}unset($n); ?>
                                     <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                                </ul>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <!--以上是展会-->
                <div class="fg_yj">
                    <div class="new_fg">
                        <div class="new_fg_title">
                            <div class="fg">最新法规</div>
                            <a target="_blank" href="<?php echo $CATEGORYS['21']['url'];?>">更多>></a>
                        </div>
                        <div class="clear"></div>
                        <div class="new_fg_cont">
                            <ul>
                               <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=fc82d2786d44557574a1b11945198a95&action=lists&catid=4&order=updatetime+DESC&num=5&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'4','order'=>'updatetime DESC','limit'=>'5',));}?>
                                <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                                <li>
                                    <a href="<?php echo $v['url'];?>" target="_blank" <?php echo title_style($v[style]);?>>&middot;<?php echo str_cut($v['title'],60,'……');?></a>
                                </li>
                               <?php $n++;}unset($n); ?>
                               <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>    
                            </ul>
                        </div>
                    </div>
                    <!--以上是最新法规-->
                    <div class="hy_yj">
                        <div class="hy_yj_title">
                            <div class="yj">
                                行业预警信息
                            </div>
                            <a target="_blank" href="<?php echo $CATEGORYS['79']['url'];?>">更多>></a>
                        </div>
                        <div class="hy_yj_cont">
                            <ul>
                                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4faa7e401695b46ec5c25d3890029aac&action=lists&catid=79&order=updatetime+DESC&num=4&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'79','order'=>'updatetime DESC','limit'=>'4',));}?>
                                <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                                <li>
                                    <a  href="<?php echo $v['url'];?>" target="_blank">&middot;<b>[<?php echo $v['title'];?>]</b><?php echo str_cut($v['description'],32,'……');?></a>
                                    <span>(<?php echo date('m-d',$r[inputtime]);?>)</span>
                                </li>
                               <?php $n++;}unset($n); ?>
                               <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>    
                            </ul>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <!--以上是行业预警信息-->
                </div>
                <div class="clear"></div>
            </div>
            <!--以上是side_2-->
            <div class="side_3">
                <div class="hy_pm">
                    <div class="guanggao_2">
                        <a href="#"><img src="<?php echo IMG_PATH;?>new/guanggao_2_11.gif" /></a>
                    </div>
                    
                    <div class="pm">
                        <div class="pm_list">
                            <ul>
                                <li style="cursor: pointer; font-weight:bold;" class="pm_qs " >进出口排名统计</li>
                                <li style="cursor: pointer;" class="pm_qs pm_check" conttop="hyck"><a>行业出口前十</a></li>
                                <li style="cursor: pointer;" class="pm_qs qspm" conttop="hyjk"><a>行业进口前十</a></li>
                                <li style="cursor: pointer;" class="pm_qs qspm" conttop="ckdq"><a>出口地区前十</a></li>
                                <li style="cursor: pointer;" class="pm_qs qspm" conttop="jkdq"><a>进口地区前十</a></li>
                                <li style="cursor: pointer;display:none;" class="pm_qs qspm" conttop="hycz" ><a>行业出增前十</a></li>
                            </ul>
                            <input type='text' style="display: none;" value="hyck" class="conttopcss" />
                        </div>
                        <div class="pm_bg">
                            <div class="pm_ss" style="margin-top: 6px;">
                                <span style="font-size: 14; color: Red; padding-right: 5px;">按月份排名查询:</span>
                                <input name="" type="text" id="ctl00_ContentPlaceHolder1_ymonth" style="width: 100px;" class="ymonth Wdate"  onclick="showMonth()" value="2014-09" />

                                <a class="gjss">
                                    <input type="button" style="width: 60px; height: 20px;" value="搜 索" />
                                </a>
                            </div>
                            
                            <div class="pm_bg_sj">
                                <div id='062240fd_dd23_4b17_8784_107831a4253a' align='center'></div>
                                    
                                    <object type="application/x-shockwave-flash" lang="EN" class="FusionCharts" id="9f5aaedd_146a_4422_84a4_2943d67ca604_id" data="./statics/js/new/Column3D.swf" width="492" height="300" style="visibility: visible;">
                                        <param name="scaleMode" value="noScale">
                                        <param name="scale" value="noScale">
                                        <param name="wMode" value="opaque">
                                        <param name="bgColor" value="#ffffff">
                                        <param name="allowScriptAccess" value="always">
                                        <param name="quality" value="best">
                                        <param name="flashvars" value="lang=EN&amp;debugMode=0&amp;scaleMode=noScale&amp;DOMId=9f5aaedd_146a_4422_84a4_2943d67ca604_id&amp;registerWithJS=1&amp;chartWidth=492&amp;chartHeight=300&amp;InvalidXMLText=Invalid data.&amp;dataXML=%3Cchart%20exportEnabled%3D'1'%20exportAtClient%3D'0'%20exportAction%3D'save'%20exportHandler%3D'%2FFusionCharts%2Fchart3_2_2%2Fsave%2FFCExporter.aspx'%20caption%3D''%20useRoundEdges%3D'1'%20numberPreFix%3D''%20showValues%3D'0'%20showLabels%3D'1'%20showLegend%3D'1'%20yAxisName%3D''%20xAxisName%3D''%20yAxisMinValue%3D'0'%3E%3Cset%20value%3D'894561.00'%20label%3D'%E5%A4%A7%E4%B8%AD%E5%B0%8F%E5%BE%AE%E5%9E%8B%E8%AE%A1%E7%AE%97%E6%9C%BA'%2F%3E%3Cset%20value%3D'252207.00'%20label%3D'%E9%9B%86%E6%88%90%E7%94%B5%E8%B7%AF%E5%8F%8A%E5%BE%AE%E7%94%B5%E5%AD%90%E7%BB%84%E4%BB%B6'%2F%3E%3Cset%20value%3D'131777.00'%20label%3D'%E5%85%B6%E4%BB%96%E6%9D%82%E9%A1%B9%E4%BA%A7%E5%93%81'%2F%3E%3Cset%20value%3D'100550.00'%20label%3D'%E9%9E%8B%E7%B1%BB'%2F%3E%3Cset%20value%3D'90594.00'%20label%3D'%E6%9C%8D%E8%A3%85'%2F%3E%3Cset%20value%3D'87280.00'%20label%3D'%E5%85%B6%E4%BB%96%E6%9C%BA%E5%99%A8%E5%8F%8A%E9%9B%B6%E4%BB%B6'%2F%3E%3Cset%20value%3D'69525.00'%20label%3D'%E5%8D%8A%E5%AF%BC%E4%BD%93%E5%99%A8%E4%BB%B6'%2F%3E%3Cset%20value%3D'65412.00'%20label%3D'%E9%92%A2%E6%9D%90'%2F%3E%3Cset%20value%3D'57511.00'%20label%3D'%E5%85%B6%E4%BB%96%E7%94%B5%E6%9C%BA%E3%80%81%E7%94%B5%E5%99%A8%E8%AE%BE%E5%A4%87%E5%8F%8A%E9%9B%B6%E4%BB%B6'%2F%3E%3Cset%20value%3D'44704.00'%20label%3D'%E5%A1%91%E6%96%99%E5%8F%8A%E5%85%B6%E5%88%B6%E5%93%81'%2F%3E%3C%2Fchart%3E&amp;dataURL=">
                                    </object>
                                
                                <script>if (!window.jQuery) {
                                        document.write("<script src='./statics/js/jquery.min.js' type='text/javascript'><\/script>");
                                    }</script>
                                <script src="<?php echo JS_PATH;?>new/FusionCharts.js" type="text/javascript"></script>
                                <script src="<?php echo JS_PATH;?>new/lib.js" type="text/javascript"></script>
                                <script src="<?php echo JS_PATH;?>new/prettify.js" type="text/javascript"></script>
                                <!--[if IE 6]>
                                <script src="/FusionCharts/chart3_2_2/common/DD_belatedPNG_0.0.8a-min.js" type="text/javascript"></script>
                                <script>
                                DD_belatedPNG.fix('img');
                                </script>
                                <![endif]-->
                                <div id='062240fd_dd23_4b17_8784_107831a4253a' align='center'></div>
                                <script defer type="text/javascript">
                                    if (GALLERY_RENDERER && GALLERY_RENDERER.search(/javascript|flash/i) == 0)
                                        FusionCharts.setCurrentRenderer(GALLERY_RENDERER);
                                    var chart = new FusionCharts("./statics/js/new/Column3D.swf", "062240fd_dd23_4b17_8784_107831a4253a_id", "492", "300", "0", "0")
                                    function htmlrender(xml) {
                                        chart.setXMLData(xml);
                                        chart.render("062240fd_dd23_4b17_8784_107831a4253a");
                                    }
                                </script>
                            </div>

                        </div>
                        <div class="clear"></div>
                    </div>
                    
                    <script type="text/javascript">
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

                        //控制点击更换下面列表
                        $(".pm_qs").click(function () {
                            if ($(this).attr("conttop") == undefined || $(this).attr("conttop") == "") {
                                return;
                            }
                            var topbtli = this;
                            $(".pm_qs").each(function () {
                                if (this == topbtli) {
                                    if ($(this).hasClass("qspm")) {
                                        $(this).removeClass("qspm");
                                        $(this).addClass("pm_check");
                                    }
                                } else {
                                    if ($(this).hasClass("pm_check")) {
                                        $(this).removeClass("pm_check");
                                        $(this).addClass("qspm");
                                    }
                                }
                            });
                            $(".conttopcss").val($(topbtli).attr("conttop"));
                            into();
                        });
                        $(document).ready(function () {
                            setTimeout("into()", 500);
                        });


                        //                    $(document).ready(function () {
                        //                        into(htmlrender);
                        //                    });
                        //alert(typeof (htmlrender))

                        function showMonth() {
                            WdatePicker({skin: 'whyGreen', dateFmt: 'yyyy-MM'});
                        }


                        //                    $(".ymonth").bind("propertychange", function () {
                        //                        into();
                        //                    });
                        if ($.browser.msie) {
                            $(".gjss").hide();
                            document.getElementById($(".ymonth").attr("id")).attachEvent('onpropertychange', function (o) {

                                if (o.propertyName != 'value')
                                    return;  //不是value改变不执行下面的操作  
                                into();
                            });
                        } else {
                            $(".gjss").show();
                        }
                        $(".gjss").click(function () {
                            into();
                        });

                        objFocusNote($(".txtvlaue"), "请输入你要(搜索/提问/回答)的关键字");

                    </script>
                </div>
                <!--以上是行业排名-->
                <div class="wmzd">
                    <div class="wmzd_title">
                        <span><a target="_blank" href="<?php echo $CATEGORYS['55']['url'];?>">外贸知道</a></span> <a target="_blank" href="<?php echo $CATEGORYS['55']['url'];?>">更多>></a>
                    </div>
                    
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=998e6cf37cd97b9d17ebdc24ca18f39f&action=category&catid=55&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'55','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                    <div class="wmzd_cont">
                        <?php $n=1; if(is_array($data)) foreach($data AS $k => $r) { ?>
                        <div class="wmzd_fl">
                            <span><a target="_blank" href="<?php echo $r['url'];?>" ><?php echo $r['catname'];?></a></span>
                            <div class="bj_fl">
                                
                                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f90c26483c17bf0b2e5b6e7ae85c5f81&action=category&catid=%24k&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$k,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                             <a target="_blank" href="<?php echo $v['url'];?>"><?php echo $v['catname'];?></a>
                                <?php $n++;}unset($n); ?>
                                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                             <a target="_blank" href="<?php echo $r['url'];?>" style="color: gray; font-weight: bold;">>></a>
                            </div>
                            <div class="clear"></div>
                        </div>
                      <?php $n++;}unset($n); ?>
                    </div>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    
                </div>
                <div class="clear"></div>
            </div>
        </div>
        
        <?php include template("content","footer"); ?>
    </body>
</html>
