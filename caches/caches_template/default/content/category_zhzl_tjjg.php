<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=7" />
        <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
        <meta name="description" content="<?php echo $SEO['description'];?>"/>
        <meta name="keywords" content="<?php echo $SEO['keyword'];?>"/>
        <?php include template("content","header1_inclub"); ?>
        <link href="<?php echo CSS_PATH;?>new/jquery-ui.css" type="text/css" rel="stylesheet" />
        <script src="<?php echo JS_PATH;?>new/jquery-ui.min.js" type="text/javascript"></script>
    </head>
    <body>
        <?php include template("content","header1"); ?>
        <div class="maincont">
            <div class="kong"></div>
            <div class="cont_2_sj">
                <div class="LEFT_ct2">

                    <div class="ZH_area">
                        <div class="ZH_area_nav">
                            <div class="nav1 MID_current">推荐机构</div>

                            <div class="clear"></div>
                        </div>
                        
                        <div class="ZH_new_cont clear">
                             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=25e0aba809f4d302f350082a57a45941&action=hits&catid=18&num=6&order=monthviews+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'18','order'=>'monthviews DESC',)).'25e0aba809f4d302f350082a57a45941');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>'18','order'=>'monthviews DESC','limit'=>'6',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                             <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?> 
                            <div class="zhjg_img">
                                <img src="<?php echo thumb($r[thumb],110,0);?>" />
                                <a href="<?php echo $r['url'];?>" target="_blank"><?php echo str_cut($r[title], 54, '……');?></a>
                            </div>
                             <?php $n++;}unset($n); ?>
                             <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                        </div>
                        
                    </div>
                    <!--以上是推荐机构-->
                    <div class="ZH_area">
                        <div class="butie_nav">
                            <a target="_blank" href="<?php echo $CATEGORYS['20']['url'];?>">全部</a>
                            <a target="_blank" href="<?php echo $CATEGORYS['19']['url'];?>">其他</a>
                            <a target="_blank" href="<?php echo $CATEGORYS['18']['url'];?>">组展机构</a>
                            <a target="_blank" href="<?php echo $CATEGORYS['17']['url'];?>">广告</a>
                            <a target="_blank" href="<?php echo $CATEGORYS['16']['url'];?>">策划</a>
                            <a target="_blank" href="<?php echo $CATEGORYS['15']['url'];?>">物流</a>
                            <a  target="_blank" href="<?php echo $CATEGORYS['14']['url'];?>">礼仪</a>
                            <span>最新机构</span>
                        </div>
                        <div class="ZH_new_cont">
                            <ul>
                                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=faaa8ec9d4b92cdbb8bbf0b3468e770d&action=hits&catid=20&num=8&order=monthviews+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'20','order'=>'monthviews DESC',)).'faaa8ec9d4b92cdbb8bbf0b3468e770d');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>'20','order'=>'monthviews DESC','limit'=>'8',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?> 
                                <li>
                                    <span><?php echo date('Y-m-d',$r[inputtime]);?></span>
                                    <a href="<?php echo $r['url'];?>" target="_blank">
                                        <font class="word_red">&middot;【<?php echo $catname;?>】</font><?php echo str_cut($r[title], 54, '……');?>
                                    </a> 
                                </li>
                               <?php $n++;}unset($n); ?>
                               <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                            </ul>
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
                                <a href="#"><img src="<?php echo IMG_PATH;?>new//BUT_2_06 (2).gif" /></a>
                            </div>
                            <div class="but_bit3">
                                <a href="#"><img src="<?php echo IMG_PATH;?>new//BUT_3_06.gif" /></a>
                            </div>
                            <div class="but_bit">
                                <a href="#"><img src="<?php echo IMG_PATH;?>new//BUT_4_06.gif" /></a>
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

                </div>
                <div class="clear"></div>
            </div>
        </div>

        <!--以上是中间内容部分-->

        <?php include template("content","foot1"); ?>
    </body>
</html>
