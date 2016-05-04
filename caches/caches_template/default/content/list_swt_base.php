<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=7" />
        <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
        <meta name="description" content="<?php echo $SEO['description'];?>"/>
        <meta name="keywords" content="<?php echo $SEO['keyword'];?>"/>
        <?php include template("content","header1_inclub"); ?>
    </head>
    <body>
    <?php include template("content","header1"); ?>
    
    <div class="maincont">
        <div class="kong"></div>
        <div class="cont_2_sj">
            <div class="LEFT_ct2">

                <!--以上是最新资讯-->
                <div class="ZH_area">
                    <div class="butie_nav">
                        <span><?php echo $catname;?></span>
                        <div class="clear"></div>
                    </div>
                    
                    <div class="ZH_new_cont">
                      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=83e86dbe8e634be99f241427bdc4f45f&action=lists&catid=%24catid&num=20&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 20;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                        <ul>
                             <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            <li><span><?php echo date('Y-m-d',$r[inputtime]);?></span>
                                <font class="word_red">&middot;【<?php echo $catname;?>】</font>
                                <a href="<?php echo $r['url'];?>"  target="_blank" <?php echo title_style($r[style]);?>><?php echo $r['title'];?></a>
                            </li>
                             <?php $n++;}unset($n); ?>
                        </ul>
                    </div>
                    <div>
                         <?php echo $pages;?>
                    </div>
                     <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </div>
            </div>
            
              <?php 
                $where = " 1=1 "; 
                if ($title){$where = $where."AND title LIKE '%$title%'";};
                if ($keywords){$where = $where."AND (keywords = $keywords)";};
                if($fileNumber && $unit) {$where = $where." AND (fileNumber = $fileNumber AND unit = $unit)";}
                ?>     
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
