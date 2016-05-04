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
                    <div class="ZH_recent_list">
                        <div class="ZHli_recent_nav">
                            <div class="nav1 MID_current">推荐展会</div>
                            <div class="clear"></div>
                        </div>
                        <div class="recent1_list clear:after">
                            
                          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4b2fa32f604043870654fb09c1c7770c&action=position&posid=22&order=listorder+DESC&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'22','order'=>'listorder DESC','limit'=>'6',));}?>
        	 	   <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?> 
                            <div class="ex_rencent">
                                <a href="<?php echo $r['url'];?>" target="_blank">
                                    <img src="<?php echo thumb($r[thumb],110,0);?>"/>
                                </a>
                                <div class="L_rencent_info">
                                    <ul>
                                        <br/>
                                        <li>
                                            <a  href="<?php echo $r['url'];?>" target="_blank"><?php echo str_cut($r[title],54,'……');?></a> 
                                        </li>
                                    
                                        <li><b>描述：</b><?php echo str_cut($r[description],18);?></li>
                                    
                                    </ul>
                                </div>
                            </div>
                        <?php $n++;}unset($n); ?>  
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
                        </div>

                        
                    </div>
                    <div style="clear:both;"></div>
                    <div class="ZH_area">
                        <div class="ZH_area_nav">
                            <div class="nav1 MID_current">最新展会</div>
                            <a href="<?php echo $CATEGORYS['52']['url'];?>" target="_blank">更多>></a>
                            <div class="clear"></div>
                        </div>
                        <div class="ZH_area_cont">
                            <ul>
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=644634780941a033e9c46badfd97962f&action=lists&catid=94&order=updatetime+DESC&num=15&return=info&where=%24where\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'94','order'=>'updatetime DESC','where'=>$where,'limit'=>'15',));}?>
                            <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                                <li>
                                    <font class="word_color">&middot;</font>
                                    <a class="zxzh" href="<?php echo $v['url'];?>" target="_blank">
                                        <span class="type">[<?php echo $CATEGORYS[$v['catid']]['catname'];?>]</span>
                                        <span class="zh_xx" style="width: 200px;"><?php echo str_cut($v['title'],36);?></span>
                                    </a>
                                    <span><?php echo $v['start_time'];?></span>
                                </li>
                            <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                            </ul>
                        </div>
                        <style>
                             .type{width:131px;}
                        </style>
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
                            <div class="RIGHT_current RIGHT_check"><a href="<?php echo $CATEGORYS['54']['url'];?>">展会知识</a></div>

                        </div>
                        <div class="A_bit_cont">
                            <ul>
                                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a89f4d17450103a0baa464966d90861b&action=hits&catid=54&num=7&order=monthviews+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'54','order'=>'monthviews DESC',)).'a89f4d17450103a0baa464966d90861b');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>'54','order'=>'monthviews DESC','limit'=>'7',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                <li><span><?php echo date('Y-m-d',$r[inputtime]);?></span>
                                    <a target="_blank" href="<?php echo $r['url'];?>">▪&nbsp;<?php echo str_cut($r[title], 60, '……');?></a>
                                </li>
                                <?php $n++;}unset($n); ?>
                                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                            </ul>
                            <div class="MID_more"><a target="_blank" href="<?php echo $CATEGORYS['54']['url'];?>">更多>></a></div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>

       <!--以上是中间内容部分-->

        <?php include template("content","foot1"); ?>
    </body>
</html>
