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
        <style>
            .recent_list ul{*margin-left:0px;*+border:red 1px solid;*+width:252px;}
            .hot_new_2{*+width:255px;}
        </style>
    </head>
    <body>
    <?php include template("content","header1"); ?>
    <div class="maincont">
        <div class="kong"></div>
        <div class="cont_2_sj">
            <div class="LEFT_ct2">
                <div class="ZH_recent_list">
                    <div class="ZHli_recent_nav">
                        <div class="nav1 MID_current">最新资讯</div>
                        <a target="_blank" href="<?php echo $CATEGORYS['91']['url'];?>">更多>></a>
                        <div class="clear"></div>
                    </div>
                    <div class="recent_list">
                        <script language="javascript" type="text/javascript">
                           <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=132335f99fcf4a0ddd78b4f4e1cd12b9&action=position&posid=1&order=listorder+DESC&thumb=1&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'1','order'=>'listorder DESC','thumb'=>'1','limit'=>'5',));}?>
                            //注：图片只能为长宽大于等于360*257
                            var pic_width = 265;
                            var pic_height = 198;
                            var text_height = 30; 
                            
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

                        <ul>
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0104a1d948cdadd9b3e99c5ca457e33c&action=lists&catid=91&order=updatetime+DESC&num=8&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'91','order'=>'updatetime DESC','limit'=>'8',));}?>
                            <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                            <li>
                                <a href="<?php echo $v['url'];?>"  target="_blank"><font class="word_red">&middot;</font><?php echo str_cut($v['title'],36);?> </a>
                                <span><?php echo date('Y-m-d',$v[inputtime]);?></span>
                            </li>
                            <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                        </ul>
                    </div>

                </div>
                <!--以上是最新资讯-->
                <div class="hot_new clear">
                    <div class="hot_new_1">
                        <div class="hot_new_nav">
                            <span>热点资讯</span>
                        </div>
                        <div class="hot_new_info">
                            <ul>
                                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e2643a2bda1afde6b85fec7ee1b1fc90&action=position&posid=21&order=listorder+DESC&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'21','order'=>'listorder DESC','limit'=>'6',));}?>
                                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>    
                                <li>
                                    <a href="<?php echo $r['url'];?>"  target="_blank">
                                        <font class="word_red">&middot;</font><?php echo str_cut($r[title],40);?>
                                    </a>
                                    <span><?php echo date('Y-m-d',$r[inputtime]);?></span>
                                </li>
                                <?php $n++;}unset($n); ?>  
                                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="hot_new_2">
                        <div class="hot_new_nav">
                            <a href="<?php echo $CATEGORYS['54']['url'];?>" target="_blank">更多>></a><span>展会知识</span>
                        </div>
                        <div class="hot_new_info" >
                            <ul>
                                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0bdf94ab7cf81ce35f900a0b517d583b&action=hits&catid=54&num=6&order=monthviews+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'54','order'=>'monthviews DESC',)).'0bdf94ab7cf81ce35f900a0b517d583b');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>'54','order'=>'monthviews DESC','limit'=>'6',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                <li>
                                    <a href="<?php echo $r['url'];?>"  target="_blank"><font class="word_red">&middot;</font><?php echo str_cut($r[title], 40);?> </a>
                                    <span><?php echo date('Y-m-d',$r[inputtime]);?></span>
                                </li>
                                <?php $n++;}unset($n); ?>
                                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="ZH_area">
                    <div class="ZH_area_nav">
                        <div class="nav1 MID_current">展会资讯</div>
                        <a target="_blank" href="<?php echo $CATEGORYS['91']['url'];?>">全部</a>
                        <a target="_blank" href="<?php echo $CATEGORYS['85']['url'];?>">其他</a>
                        <a target="_blank" href="<?php echo $CATEGORYS['84']['url'];?>">食品</a>
                        <a target="_blank" href="<?php echo $CATEGORYS['83']['url'];?>">机械</a>
                        <a target="_blank" href="<?php echo $CATEGORYS['82']['url'];?>">化工</a>
                        <a target="_blank" href="<?php echo $CATEGORYS['81']['url'];?>">电子</a>
                        <a target="_blank" href="<?php echo $CATEGORYS['80']['url'];?>">汽车</a>
                        <div class="clear"></div>
                    </div>
                    <div class="ZH_new_cont">
                        <ul>
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2aca6c14d9111caff57414b7b0567ffa&action=hits&catid=91&num=9&order=monthviews+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'91','order'=>'monthviews DESC',)).'2aca6c14d9111caff57414b7b0567ffa');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>'91','order'=>'monthviews DESC','limit'=>'9',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            <li>
                                <span><?php echo date('Y-m-d',$r[inputtime]);?></span>
                                <font class="word_red">&middot;【<?php echo $catname;?>】</font>
                                <a href="<?php echo $r['url'];?>"  target="_blank"><?php echo str_cut($r[title], 60, '……');?> </a>
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
                            <li>
                                <a target="_blank" href="<?php echo $r['url'];?>">▪&nbsp;<?php echo str_cut($r[title], 54, '……');?></a>
                            </li> 
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

       <!--以上是中间内容部分-->
    
    <?php include template("content","foot1"); ?>
    </body>
</html>
