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
                        <div class="nav1 MID_current">参展补贴</div>

                        <div class="clear"></div>
                    </div>
                    <div class="recent_butie">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0f5a84406bf793cac8ba71a9c3bb2037&action=lists&catid=86&order=updatetime+DESC&thumb=1&num=1&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'86','order'=>'updatetime DESC','thumb'=>'1','limit'=>'1',));}?>
                     <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                      <a  href="<?php echo $v['url'];?>" target="_blank">
                        <img src="<?php echo thumb($v[thumb],100,55);?>" />
                      </a>
                    <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>  
                   
                    <ul>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=642c6ec3db71223e599b509f87b18ae8&action=lists&catid=86&num=6&order=id+DESC&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'86','order'=>'id DESC','limit'=>'6',));}?>
                     <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                        <li>
                            <a href="<?php echo $v['url'];?>" target="_blank">
                                <font class="word_red">&middot;</font><?php echo str_cut($v['title'],52,'……');?>
                            </a>
                        </li>
                        <?php $n++;}unset($n); ?>
                       <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                        <div class="clear"></div>
                    </ul>
                   
                    </div>

                </div>
                <!--以上是最新资讯-->
                <div class="ZH_area">
                    <div class="ZH_area_nav">
                        <div class="nav1 MID_current">政府组织</div>
                        <a target="_blank" href="<?php echo $CATEGORYS['87']['url'];?>">更多>></a>
                        <div class="clear"></div>
                    </div>
                    <div class="ZH_new_cont">
                        <ul>
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1ded0bb8864f3c2f244ba77bcb6f8175&action=lists&catid=87&num=7&order=id+DESC&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'87','order'=>'id DESC','limit'=>'7',));}?>
                         <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?> 
                            <li>
                                <a href="<?php echo $v['url'];?>" target="_blank"><font class="word_red">&middot;</font><?php echo str_cut($v['title'],80,'……');?></a>
                                <span><?php echo date('Y-m-d',$v[inputtime]);?></span> 
                            </li>
                        <?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>   
                        </ul>
                    </div>
                </div>
                <div class="ZH_area">
                    
                   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8ae6939bf593ed752f185278ed36e990&action=lists&catid=88&order=updatetime+DESC&num=1&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'88','order'=>'updatetime DESC','limit'=>'1',));}?>
                   <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                    <div class="butie_nav">
                        <a target="_blank" href="<?php echo $v['url'];?>">更多>></a><span><?php echo str_cut($v['title'],80,'……');?></span>
                    </div>
                    <div class="ZH_new_cont">              
                        <p>
                            <a target="_blank" href="<?php echo $v['url'];?>">  <?php echo str_cut($v['description'],200,'……');?></a>
                        </p>
                    </div>
                  <?php $n++;}unset($n); ?>
                  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
                </div>
                <div class="ZH_area">
                    <div class="ZH_area_nav">
                        <div class="nav1 MID_current">其他资金</div>
                        <a target="_blank" href="<?php echo $CATEGORYS['88']['url'];?>">更多>></a>
                        <div class="clear"></div>
                    </div>
                    <div class="ZH_new_cont">
                        <ul>
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8190d7a971f60c5dbb26f9b898fa5c9d&action=lists&catid=88&num=7&order=id+DESC&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'88','order'=>'id DESC','limit'=>'7',));}?>
                         <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?> 
                            <li>
                                <a href="<?php echo $v['url'];?>" target="_blank"><font class="word_red">&middot;</font><?php echo str_cut($v['title'],80,'……');?></a>
                                <span><?php echo date('Y-m-d',$v[inputtime]);?></span> 
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
                        <div class="RIGHT_current RIGHT_check">
                            <a href="<?php echo $CATEGORYS['18']['url'];?>">推荐机构</a>
                        </div>

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
                        <div class="MID_more"><a target="_blank" href="<?php echo $CATEGORYS['18']['url'];?>">更多>></a></div>
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
