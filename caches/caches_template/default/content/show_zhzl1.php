<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=7" />
        <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
        <meta name="description" content="<?php echo $SEO['description'];?>"/>
        <meta name="keywords" content="<?php echo $SEO['keyword'];?>"/>
        <?php include template("content","header1_inclub"); ?>
        <link href="<?php echo CSS_PATH;?>new/law.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo JS_PATH;?>new/DJCSTJ.js" type="text/javascript"></script>
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
        <div class="maincont" style="margin-bottom:15px;">
            <div class="kong"></div>
            <div class="cont_2_sj">
                <div class="LEFT_ct2">
                    <div class="ZH_area">
                        <div class="ZH_new_cont1">
                            <h3><?php echo $title;?></h3>
                            <div class="CONT_info">
                                发布日期：<span><?php echo $inputtime;?></span>&nbsp;字体【<span style="cursor: pointer" size="16">大</span>&nbsp;
                                <span style="cursor: pointer" size="14">中</span>&nbsp;<span style="cursor: pointer" size="12">小</span>】<br />&nbsp;&nbsp;&nbsp;
                                背景颜色:&nbsp;&nbsp;<img src="<?php echo IMG_PATH;?>new1/new-c-1.jpg" num="0" />
                                &nbsp;&nbsp;&nbsp;<img src="<?php echo IMG_PATH;?>new1/new-c-2.jpg" num="1" />
                                &nbsp;&nbsp;&nbsp;<img src="<?php echo IMG_PATH;?>new1/new-c-3.jpg" num="2" />
                                &nbsp;&nbsp;&nbsp;<img src="<?php echo IMG_PATH;?>new1/new-c-4.jpg" num="3" />
                                &nbsp;&nbsp;&nbsp;<img src="<?php echo IMG_PATH;?>new1/new-c-5.jpg" num="4" />
                                <a target="_blank" onclick="preview()">[打印内容]</a>
                            </div>
                            <br /><br />
                            <div class="lmnrdetail CONT_p " style=" width:100%">
                                 <?php echo $content;?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="RIGHT_ct2">
                    <?php include template("content","zhzl_search"); ?>   <!--展会的搜索公用框部分-->
                    <!--以上是  ZH_recent-->
                    <div class="A_bit">
                        <div class="A_bit_nav">
                            <div class="RIGHT_current RIGHT_check"><a href="#">展会一点通</a></div>
                        </div>
                        <div class="A_bit_cont">
                            <div class="but_bit">
                                <a href="#"><img src="<?php echo IMG_PATH;?>new/BUT_1_06.gif" /></a>
                            </div>
                            <div class="but_bit">
                                <a href="#"><img src="<?php echo IMG_PATH;?>new/BUT_2_06 (2).gif" /></a>
                            </div>
                            <div class="but_bit3">
                                <a href="#"><img src="<?php echo IMG_PATH;?>new/BUT_3_06.gif" /></a>
                            </div>
                            <div class="but_bit">
                                <a href="#"><img src="<?php echo IMG_PATH;?>new/BUT_4_06.gif" /></a>
                            </div>
                            <div class="but_bit">
                                <a href="#"><img src="<?php echo IMG_PATH;?>new/but_5_06.gif"/></a>
                            </div>
                            <div class="but_bit3">
                                <a href="#"><img src="<?php echo IMG_PATH;?>new/BUT_6_06.gif"/></a>
                            </div>
                            <div class="but_bit bit_bt">
                                <a href="#"><img src="<?php echo IMG_PATH;?>new/BUT_7_06.gif"/></a>
                            </div>
                            <div class="but_bit bit_bt">
                                <a href="#"><img src="<?php echo IMG_PATH;?>new/but_8_06.gif" /></a>
                            </div>
                            <div class="but_bit4">
                                <a href="#"><img src="<?php echo IMG_PATH;?>new/but_9_06.gif" /></a>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <!--以上是 A_bit-->

                    <!--以上是V_introduction-->
                    <div class="A_bit">
                        <div class="A_bit_nav">
                            <div class="RIGHT_current RIGHT_check"><a href="<?php echo $CATEGORYS['18']['url'];?>">推荐机构</a></div>
                        </div>
                        <div class="A_bit_cont">
                            <ul>
                                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=221c64488e106c608433f1691eff0949&action=hits&catid=18&num=8&order=monthviews+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'18','order'=>'monthviews DESC',)).'221c64488e106c608433f1691eff0949');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>'18','order'=>'monthviews DESC','limit'=>'8',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?> 
                                <li><a target="_blank" href="<?php echo $r['url'];?>">▪&nbsp;<?php echo str_cut($r[title], 54, '……');?></a></li>
                                <?php $n++;}unset($n); ?>
                                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>   
                            </ul>
                            <div class="MID_more"><a href="<?php echo $CATEGORYS['18']['url'];?>" target="_blank">更多>></a></div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
               <div class="clear"></div>
            </div>
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
            var tablename = 'WZ_LMNR';
            var pkid = '15059';
            GXDJCS(tablename, pkid);
        </script>
        <script src="<?php echo JS_PATH;?>new/DetailStyle.js" type="text/javascript"></script>
        <!--以上是中间内容部分-->

        <?php include template("content","foot1"); ?>
    </body>
</html>
